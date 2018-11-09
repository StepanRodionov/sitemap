<?php


namespace WebArch\Sitemap\Model;

use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlRoot;


/**
 * Class Sitemap
 * @package WebArch\Sitemap\Model
 *
 * @XmlRoot("urlset",namespace="http://www.sitemaps.org/schemas/sitemap/0.9")
 * @XmlNamespace(uri="http://www.google.com/schemas/sitemap-image/1.1", prefix="image")
 */
class ImageSitemap extends Sitemap
{

}