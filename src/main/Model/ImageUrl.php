<?php


namespace WebArch\Sitemap\Model;

use DateTimeImmutable;
use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ImageUrl
 * @package WebArch\Sitemap\Model
 *
 * @XmlRoot("url")
 */
class ImageUrl extends Url
{
    const IMAGES_MAX_COUNT = 1000;

    /**
     * @var string
     * @XmlElement(cdata=false)
     * @Type("string")
     * @Groups({"sitemap"})
     * @Accessor(getter="getLoc",setter="withLoc")
     */
    protected $loc = '';

    /**
     * @var ArrayCollection
     * @Groups({"sitemap"})
     * @XmlList(inline=true, entry="image:image")
     */
    protected $images;

    /**
     * @Serializer\SkipWhenEmpty()
     */
    protected $changefreq;

    /**
     * @Serializer\SkipWhenEmpty()
     */
    protected $lastmod;

    /**
     * @Serializer\SkipWhenEmpty()
     */
    protected $priority;

    /**
     * @return string
     */
    public function getLoc(): string
    {
        return $this->loc;
    }

    /**
     * @param string $loc
     *
     * @return $this
     */
    public function withLoc(string $loc)
    {
        $this->loc = $loc;

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param ArrayCollection $images
     *
     * @return $this
     */
    public function withImages($images): self
    {
        $this->images = $images;

        return $this;
    }

    public function withLastmod(DateTimeImmutable $lastmod)
    {
        return $this;
    }

    public function withChangefreq(string $changefreq)
    {
        return $this;
    }

    public function withPriority($priority)
    {
        return $this;
    }


}

