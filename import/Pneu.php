<?php

namespace ImportManager\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pneu
 */
class Pneu
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $ean;

    /**
     * @var string
     */
    private $ipc_code;

    /**
     * @var string
     */
    private $brand_name;

    /**
     * @var string
     */
    private $distributor_code;

    /**
     * @var string
     */
    private $price;

    /**
     * @var string
     */
    private $quantity;

    /**
     * @var string
     */
    private $category;

    /**
     * @var string
     */
    private $category2;

    /**
     * @var string
     */
    private $article_name;

    /**
     * @var string
     */
    private $prefix;

    /**
     * @var string
     */
    private $width;

    /**
     * @var string
     */
    private $sep;

    /**
     * @var string
     */
    private $ratio;

    /**
     * @var string
     */
    private $structure;

    /**
     * @var string
     */
    private $seat;

    /**
     * @var string
     */
    private $suffix;

    /**
     * @var string
     */
    private $load_index;

    /**
     * @var string
     */
    private $speed_index;

    /**
     * @var string
     */
    private $index2;

    /**
     * @var string
     */
    private $tube;

    /**
     * @var string
     */
    private $flanc1;

    /**
     * @var string
     */
    private $flanc2;

    /**
     * @var string
     */
    private $flanc3;

    /**
     * @var string
     */
    private $sculpture;

    /**
     * @var string
     */
    private $sculpture_complement;

    /**
     * @var string
     */
    private $run_flat;

    /**
     * @var string
     */
    private $position;

    /**
     * @var string
     */
    private $utilisation;

    /**
     * @var string
     */
    private $choice;

    /**
     * @var string
     */
    private $oe;

    /**
     * @var string
     */
    private $made_in;

    /**
     * @var string
     */
    private $dot;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $brand_id;

    /**
     * @var string
     */
    private $season;

    /**
     * @var string
     */
    private $weight;

    /**
     * @var string
     */
    private $temp1;

    /**
     * @var string
     */
    private $fuellef;

    /**
     * @var string
     */
    private $wetgripp;

    /**
     * @var string
     */
    private $extnoise;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ean
     *
     * @param string $ean
     * @return Pneu
     */
    public function setEan($ean)
    {
        $this->ean = $ean;

        return $this;
    }

    /**
     * Get ean
     *
     * @return string 
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * Set ipc_code
     *
     * @param string $ipcCode
     * @return Pneu
     */
    public function setIpcCode($ipcCode)
    {
        $this->ipc_code = $ipcCode;

        return $this;
    }

    /**
     * Get ipc_code
     *
     * @return string 
     */
    public function getIpcCode()
    {
        return $this->ipc_code;
    }

    /**
     * Set brand_name
     *
     * @param string $brandName
     * @return Pneu
     */
    public function setBrandName($brandName)
    {
        $this->brand_name = $brandName;

        return $this;
    }

    /**
     * Get brand_name
     *
     * @return string 
     */
    public function getBrandName()
    {
        return $this->brand_name;
    }

    /**
     * Set distributor_code
     *
     * @param string $distributorCode
     * @return Pneu
     */
    public function setDistributorCode($distributorCode)
    {
        $this->distributor_code = $distributorCode;

        return $this;
    }

    /**
     * Get distributor_code
     *
     * @return string 
     */
    public function getDistributorCode()
    {
        return $this->distributor_code;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return Pneu
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set quantity
     *
     * @param string $quantity
     * @return Pneu
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return string 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set category
     *
     * @param string $category
     * @return Pneu
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set category2
     *
     * @param string $category2
     * @return Pneu
     */
    public function setCategory2($category2)
    {
        $this->category2 = $category2;

        return $this;
    }

    /**
     * Get category2
     *
     * @return string 
     */
    public function getCategory2()
    {
        return $this->category2;
    }

    /**
     * Set article_name
     *
     * @param string $articleName
     * @return Pneu
     */
    public function setArticleName($articleName)
    {
        $this->article_name = $articleName;

        return $this;
    }

    /**
     * Get article_name
     *
     * @return string 
     */
    public function getArticleName()
    {
        return $this->article_name;
    }

    /**
     * Set prefix
     *
     * @param string $prefix
     * @return Pneu
     */
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;

        return $this;
    }

    /**
     * Get prefix
     *
     * @return string 
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * Set width
     *
     * @param string $width
     * @return Pneu
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return string 
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set sep
     *
     * @param string $sep
     * @return Pneu
     */
    public function setSep($sep)
    {
        $this->sep = $sep;

        return $this;
    }

    /**
     * Get sep
     *
     * @return string 
     */
    public function getSep()
    {
        return $this->sep;
    }

    /**
     * Set ratio
     *
     * @param string $ratio
     * @return Pneu
     */
    public function setRatio($ratio)
    {
        $this->ratio = $ratio;

        return $this;
    }

    /**
     * Get ratio
     *
     * @return string 
     */
    public function getRatio()
    {
        return $this->ratio;
    }

    /**
     * Set structure
     *
     * @param string $structure
     * @return Pneu
     */
    public function setStructure($structure)
    {
        $this->structure = $structure;

        return $this;
    }

    /**
     * Get structure
     *
     * @return string 
     */
    public function getStructure()
    {
        return $this->structure;
    }

    /**
     * Set seat
     *
     * @param string $seat
     * @return Pneu
     */
    public function setSeat($seat)
    {
        $this->seat = $seat;

        return $this;
    }

    /**
     * Get seat
     *
     * @return string 
     */
    public function getSeat()
    {
        return $this->seat;
    }

    /**
     * Set suffix
     *
     * @param string $suffix
     * @return Pneu
     */
    public function setSuffix($suffix)
    {
        $this->suffix = $suffix;

        return $this;
    }

    /**
     * Get suffix
     *
     * @return string 
     */
    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * Set load_index
     *
     * @param string $loadIndex
     * @return Pneu
     */
    public function setLoadIndex($loadIndex)
    {
        $this->load_index = $loadIndex;

        return $this;
    }

    /**
     * Get load_index
     *
     * @return string 
     */
    public function getLoadIndex()
    {
        return $this->load_index;
    }

    /**
     * Set speed_index
     *
     * @param string $speedIndex
     * @return Pneu
     */
    public function setSpeedIndex($speedIndex)
    {
        $this->speed_index = $speedIndex;

        return $this;
    }

    /**
     * Get speed_index
     *
     * @return string 
     */
    public function getSpeedIndex()
    {
        return $this->speed_index;
    }

    /**
     * Set index2
     *
     * @param string $index2
     * @return Pneu
     */
    public function setIndex2($index2)
    {
        $this->index2 = $index2;

        return $this;
    }

    /**
     * Get index2
     *
     * @return string 
     */
    public function getIndex2()
    {
        return $this->index2;
    }

    /**
     * Set tube
     *
     * @param string $tube
     * @return Pneu
     */
    public function setTube($tube)
    {
        $this->tube = $tube;

        return $this;
    }

    /**
     * Get tube
     *
     * @return string 
     */
    public function getTube()
    {
        return $this->tube;
    }

    /**
     * Set flanc1
     *
     * @param string $flanc1
     * @return Pneu
     */
    public function setFlanc1($flanc1)
    {
        $this->flanc1 = $flanc1;

        return $this;
    }

    /**
     * Get flanc1
     *
     * @return string 
     */
    public function getFlanc1()
    {
        return $this->flanc1;
    }

    /**
     * Set flanc2
     *
     * @param string $flanc2
     * @return Pneu
     */
    public function setFlanc2($flanc2)
    {
        $this->flanc2 = $flanc2;

        return $this;
    }

    /**
     * Get flanc2
     *
     * @return string 
     */
    public function getFlanc2()
    {
        return $this->flanc2;
    }

    /**
     * Set flanc3
     *
     * @param string $flanc3
     * @return Pneu
     */
    public function setFlanc3($flanc3)
    {
        $this->flanc3 = $flanc3;

        return $this;
    }

    /**
     * Get flanc3
     *
     * @return string 
     */
    public function getFlanc3()
    {
        return $this->flanc3;
    }

    /**
     * Set sculpture
     *
     * @param string $sculpture
     * @return Pneu
     */
    public function setSculpture($sculpture)
    {
        $this->sculpture = $sculpture;

        return $this;
    }

    /**
     * Get sculpture
     *
     * @return string 
     */
    public function getSculpture()
    {
        return $this->sculpture;
    }

    /**
     * Set sculpture_complement
     *
     * @param string $sculptureComplement
     * @return Pneu
     */
    public function setSculptureComplement($sculptureComplement)
    {
        $this->sculpture_complement = $sculptureComplement;

        return $this;
    }

    /**
     * Get sculpture_complement
     *
     * @return string 
     */
    public function getSculptureComplement()
    {
        return $this->sculpture_complement;
    }

    /**
     * Set run_flat
     *
     * @param string $runFlat
     * @return Pneu
     */
    public function setRunFlat($runFlat)
    {
        $this->run_flat = $runFlat;

        return $this;
    }

    /**
     * Get run_flat
     *
     * @return string 
     */
    public function getRunFlat()
    {
        return $this->run_flat;
    }

    /**
     * Set position
     *
     * @param string $position
     * @return Pneu
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set utilisation
     *
     * @param string $utilisation
     * @return Pneu
     */
    public function setUtilisation($utilisation)
    {
        $this->utilisation = $utilisation;

        return $this;
    }

    /**
     * Get utilisation
     *
     * @return string 
     */
    public function getUtilisation()
    {
        return $this->utilisation;
    }

    /**
     * Set choice
     *
     * @param string $choice
     * @return Pneu
     */
    public function setChoice($choice)
    {
        $this->choice = $choice;

        return $this;
    }

    /**
     * Get choice
     *
     * @return string 
     */
    public function getChoice()
    {
        return $this->choice;
    }

    /**
     * Set oe
     *
     * @param string $oe
     * @return Pneu
     */
    public function setOe($oe)
    {
        $this->oe = $oe;

        return $this;
    }

    /**
     * Get oe
     *
     * @return string 
     */
    public function getOe()
    {
        return $this->oe;
    }

    /**
     * Set made_in
     *
     * @param string $madeIn
     * @return Pneu
     */
    public function setMadeIn($madeIn)
    {
        $this->made_in = $madeIn;

        return $this;
    }

    /**
     * Get made_in
     *
     * @return string 
     */
    public function getMadeIn()
    {
        return $this->made_in;
    }

    /**
     * Set dot
     *
     * @param string $dot
     * @return Pneu
     */
    public function setDot($dot)
    {
        $this->dot = $dot;

        return $this;
    }

    /**
     * Get dot
     *
     * @return string 
     */
    public function getDot()
    {
        return $this->dot;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Pneu
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set brand_id
     *
     * @param string $brandId
     * @return Pneu
     */
    public function setBrandId($brandId)
    {
        $this->brand_id = $brandId;

        return $this;
    }

    /**
     * Get brand_id
     *
     * @return string 
     */
    public function getBrandId()
    {
        return $this->brand_id;
    }

    /**
     * Set season
     *
     * @param string $season
     * @return Pneu
     */
    public function setSeason($season)
    {
        $this->season = $season;

        return $this;
    }

    /**
     * Get season
     *
     * @return string 
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * Set weight
     *
     * @param string $weight
     * @return Pneu
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return string 
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set temp1
     *
     * @param string $temp1
     * @return Pneu
     */
    public function setTemp1($temp1)
    {
        $this->temp1 = $temp1;

        return $this;
    }

    /**
     * Get temp1
     *
     * @return string 
     */
    public function getTemp1()
    {
        return $this->temp1;
    }

    /**
     * Set fuellef
     *
     * @param string $fuellef
     * @return Pneu
     */
    public function setFuellef($fuellef)
    {
        $this->fuellef = $fuellef;

        return $this;
    }

    /**
     * Get fuellef
     *
     * @return string 
     */
    public function getFuellef()
    {
        return $this->fuellef;
    }

    /**
     * Set wetgripp
     *
     * @param string $wetgripp
     * @return Pneu
     */
    public function setWetgripp($wetgripp)
    {
        $this->wetgripp = $wetgripp;

        return $this;
    }

    /**
     * Get wetgripp
     *
     * @return string 
     */
    public function getWetgripp()
    {
        return $this->wetgripp;
    }

    /**
     * Set extnoise
     *
     * @param string $extnoise
     * @return Pneu
     */
    public function setExtnoise($extnoise)
    {
        $this->extnoise = $extnoise;

        return $this;
    }

    /**
     * Get extnoise
     *
     * @return string 
     */
    public function getExtnoise()
    {
        return $this->extnoise;
    }
}
