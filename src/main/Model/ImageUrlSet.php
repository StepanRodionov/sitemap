<?php


namespace WebArch\Sitemap\Model;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;
use WebArch\Sitemap\Model\Traits\ArrayCollectionDecorator;

/**
 * Class ImageUrlSet
 * @package WebArch\Sitemap\Model
 *
 * @XmlRoot(name="urlset",namespace="http://www.sitemaps.org/schemas/sitemap/0.9")
 */
class ImageUrlSet extends UrlSet
{
    use ArrayCollectionDecorator;

    /**
     * @var ArrayCollection
     * @Type("ArrayCollection<WebArch\Sitemap\Model\ImageUrl>")
     * @XmlList(inline=true,entry="url")
     * @Groups({"sitemap"})
     */
    protected $collection;
}