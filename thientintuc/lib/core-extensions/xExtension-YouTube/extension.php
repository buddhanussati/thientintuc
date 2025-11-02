<?php

/**
 * Class YouTubeExtension
 *
 * Latest version can be found at https://framagit.org/ImAReplicant/freshrss-youtube
 *
 * @author Kevin Papst
 * @maintainer ImAReplicant
 */
class YouTubeExtension extends Minz_Extension
{
    // Configuration properties have been removed.

    public function install() {
        return true;
    }

    public function uninstall() {
        return true;
    }

    /**
     * Initialize this extension
     */
    public function init()
    {
        $this->registerHook('entry_before_display', array($this, 'embedYouTubeVideo'));
        $this->registerTranslates();
    }
    
    // All configuration-related getter methods have been removed.

    /**
     * Inserts the YouTube video iframe into the content of an entry, if the entries link points to a YouTube watch URL.
     *
     * @param FreshRSS_Entry $entry
     * @return mixed
     */
	 public function isShort(string $website): bool {
		return str_starts_with($website, 'https://www.youtube.com/shorts');
	}
	public function convertShortToWatch(string $shortUrl): string {
		$prefix = 'https://www.youtube.com/shorts/';

		if (str_starts_with($shortUrl, $prefix)) {
			$videoId = str_replace($prefix, '', $shortUrl);
			return 'https://www.youtube.com/watch?v=' . $videoId;
		}

		return $shortUrl;
	}
	
	
    public function embedYouTubeVideo($entry)
    {
        $link = $entry->link();
		
		if ($this->isShort($link)) {
			$link = $this->convertShortToWatch($link);
		}

        if (preg_match('#^https?://www\.youtube\.com/watch\?v=|/videos/watch/[0-9a-f-]{36}$#', $link) !== 1) {
	    return $entry;
	}


        if (stripos($entry->content(), '<iframe class="youtube-plugin-video"') !== false) {
            return $entry;
        }
        if (stripos($link, 'www.youtube.com/watch?v=') !== false) {
            $html = $this->getHtmlContentForLink($entry, $link);
        }
        else { //peertube
            $html = $this->getHtmlPeerTubeContentForLink($entry, $link);
        }

        $entry->_content($html);

        return $entry;
    }

    /**
     * Returns an HTML <iframe> for a given Youtube watch URL (www.youtube.com/watch?v=)
     *
     * @param string $link
     * @return string
     */
    public function getHtmlContentForLink($entry, $link)
    {
        $domain = 'www.youtube.com';
        // Hardcoding $useNoCookie to false
        if (false) { 
            $domain = 'www.youtube-nocookie.com';
        }
        $url = str_replace('//www.youtube.com/watch?v=', '//'.$domain.'/embed/', $link);
        $url = str_replace('http://', 'https://', $url);

        $html = $this->getHtml($entry, $url);

	return $html;
    }

    /**
     * Returns an HTML <iframe> for a given PeerTube watch URL
     *
     * @param string $link
     * @return string
     */
    public function getHtmlPeerTubeContentForLink($entry, $link)
    {
	$url = str_replace('/w', '/videos/embed', $link);
        $html = $this->getHtml($entry, $url);

        return $html;
    }

    /**
     * Returns an HTML <iframe> for a given URL for the configured width and height, with content ignored, appended or formated.
     *
     * @param string $url
     * @return string
     */
    public function getHtml($entry, $url)
    {
        $content = '';
        
        // Hardcoded values from original properties
        $width = 560;
        $height = 315;

        $iframe = '<iframe class="youtube-plugin-video"
				style="height: ' . $height . 'px; width: ' . $width . 'px;"
				width="' . $width . '"
				height="' . $height . '"
				src="' . $url . '"
				frameborder="0"
				referrerpolicy="strict-origin-when-cross-origin"
				allowFullScreen></iframe>';

        // Hardcoding $showContent to false
        if (false) {
			$doc = new DOMDocument();
			$doc->encoding = 'UTF-8';
			$doc->recover = true;
			$doc->strictErrorChecking = false;

			if ($doc->loadHTML('<?xml encoding="utf-8" ?>' . $entry->content())) {
				$xpath = new DOMXPath($doc);

				/** @var DOMNodeList<DOMElement> $titles */
				$titles = $xpath->evaluate("//*[@class='enclosure-title']");
				/** @var DOMNodeList<DOMElement> $thumbnails */
				$thumbnails = $xpath->evaluate("//*[@class='enclosure-thumbnail']/@src");
				/** @var DOMNodeList<DOMElement> $descriptions */
				$descriptions = $xpath->evaluate("//*[@class='enclosure-description']");

				$content = '<div class="enclosure">';

		// We hide the title so it doesn't appear in the final article, which would be redundant with the RSS article title,
		// but we keep it in the content anyway, so RSS clients can extract it if needed.
		if ($titles->length > 0) {
		    $content .= '<p class="enclosure-title" hidden>' . $titles[0]->nodeValue . '</p>';
		}

		// We hide the thumbnail so it doesn't appear in the final article, which would be redundant with the YouTube player preview,
		// but we keep it in the content anyway, so RSS clients can extract it to display a preview where it wants (in article listing,
		// by example, like with Reeder).
		if ($thumbnails->length > 0) {
		    $content .= '<p hidden><img class="enclosure-thumbnail" src="' . $thumbnails[0]->nodeValue . '" alt=""/></p>';
		}

		$content .= $iframe;

		if ($descriptions->length > 0) {
		    foreach($descriptions as $text) {
			$content .= $text->ownerDocument->saveHTML($text);
		    }
		}

		$content .= "</div>\n";
	    }
	    else {
		$content = $iframe . $entry->content();
	    }
	}
	else {
	    // Since $showContent is false, we only return the iframe.
	    $content = $iframe;
	}

	return $content;
    }
}