<?php

namespace RealEstate\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * House
 *
 * @ORM\Table(name="house")
 * @ORM\Entity
 */
class House
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="pid", type="integer", nullable=false)
     */
    private $pid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hidden", type="boolean", nullable=false)
     */
    private $hidden;

    /**
     * @var boolean
     *
     * @ORM\Column(name="disabled", type="boolean", nullable=false)
     */
    private $disabled;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted;

    /**
     * @var integer
     *
     * @ORM\Column(name="createdTime", type="integer", nullable=false)
     */
    private $createdtime;

    /**
     * @var integer
     *
     * @ORM\Column(name="createdUserUid", type="integer", nullable=false)
     */
    private $createduseruid;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastModifiedTime", type="integer", nullable=false)
     */
    private $lastmodifiedtime;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastModifiedUserUid", type="integer", nullable=false)
     */
    private $lastmodifieduseruid;

    /**
     * @var integer
     *
     * @ORM\Column(name="validTimeStart", type="integer", nullable=false)
     */
    private $validtimestart;

    /**
     * @var integer
     *
     * @ORM\Column(name="validTimeEnd", type="integer", nullable=false)
     */
    private $validtimeend;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isRoomRent", type="boolean", nullable=false)
     */
    private $isroomrent;

    /**
     * @var integer
     *
     * @ORM\Column(name="cost", type="integer", nullable=false)
     */
    private $cost;

    /**
     * @var boolean
     *
     * @ORM\Column(name="available", type="boolean", nullable=false)
     */
    private $available;

    /**
     * @var string
     *
     * @ORM\Column(name="imagePathJsonStringList", type="text", nullable=false)
     */
    private $imagepathjsonstringlist;

    /**
     * @var string
     *
     * @ORM\Column(name="otherInfo", type="text", nullable=false)
     */
    private $otherinfo;

    /**
     * @var \RealEstate\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="RealEstate\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \RealEstate\Entity\HouseType
     *
     * @ORM\ManyToOne(targetEntity="RealEstate\Entity\HouseType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type", referencedColumnName="id")
     * })
     */
    private $type;

    /**
     * @var \RealEstate\Entity\Size
     *
     * @ORM\ManyToOne(targetEntity="RealEstate\Entity\Size")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="size", referencedColumnName="id")
     * })
     */
    private $size;

    /**
     * @var \RealEstate\Entity\Address
     *
     * @ORM\ManyToOne(targetEntity="RealEstate\Entity\Address")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="address", referencedColumnName="id")
     * })
     */
    private $address;



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
     * Set pid
     *
     * @param integer $pid
     * @return House
     */
    public function setPid($pid)
    {
        $this->pid = $pid;
    
        return $this;
    }

    /**
     * Get pid
     *
     * @return integer 
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Set hidden
     *
     * @param boolean $hidden
     * @return House
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;
    
        return $this;
    }

    /**
     * Get hidden
     *
     * @return boolean 
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    /**
     * Set disabled
     *
     * @param boolean $disabled
     * @return House
     */
    public function setDisabled($disabled)
    {
        $this->disabled = $disabled;
    
        return $this;
    }

    /**
     * Get disabled
     *
     * @return boolean 
     */
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return House
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    
        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set createdtime
     *
     * @param integer $createdtime
     * @return House
     */
    public function setCreatedtime($createdtime)
    {
        $this->createdtime = $createdtime;
    
        return $this;
    }

    /**
     * Get createdtime
     *
     * @return integer 
     */
    public function getCreatedtime()
    {
        return $this->createdtime;
    }

    /**
     * Set createduseruid
     *
     * @param integer $createduseruid
     * @return House
     */
    public function setCreateduseruid($createduseruid)
    {
        $this->createduseruid = $createduseruid;
    
        return $this;
    }

    /**
     * Get createduseruid
     *
     * @return integer 
     */
    public function getCreateduseruid()
    {
        return $this->createduseruid;
    }

    /**
     * Set lastmodifiedtime
     *
     * @param integer $lastmodifiedtime
     * @return House
     */
    public function setLastmodifiedtime($lastmodifiedtime)
    {
        $this->lastmodifiedtime = $lastmodifiedtime;
    
        return $this;
    }

    /**
     * Get lastmodifiedtime
     *
     * @return integer 
     */
    public function getLastmodifiedtime()
    {
        return $this->lastmodifiedtime;
    }

    /**
     * Set lastmodifieduseruid
     *
     * @param integer $lastmodifieduseruid
     * @return House
     */
    public function setLastmodifieduseruid($lastmodifieduseruid)
    {
        $this->lastmodifieduseruid = $lastmodifieduseruid;
    
        return $this;
    }

    /**
     * Get lastmodifieduseruid
     *
     * @return integer 
     */
    public function getLastmodifieduseruid()
    {
        return $this->lastmodifieduseruid;
    }

    /**
     * Set validtimestart
     *
     * @param integer $validtimestart
     * @return House
     */
    public function setValidtimestart($validtimestart)
    {
        $this->validtimestart = $validtimestart;
    
        return $this;
    }

    /**
     * Get validtimestart
     *
     * @return integer 
     */
    public function getValidtimestart()
    {
        return $this->validtimestart;
    }

    /**
     * Set validtimeend
     *
     * @param integer $validtimeend
     * @return House
     */
    public function setValidtimeend($validtimeend)
    {
        $this->validtimeend = $validtimeend;
    
        return $this;
    }

    /**
     * Get validtimeend
     *
     * @return integer 
     */
    public function getValidtimeend()
    {
        return $this->validtimeend;
    }

    /**
     * Set isroomrent
     *
     * @param boolean $isroomrent
     * @return House
     */
    public function setIsroomrent($isroomrent)
    {
        $this->isroomrent = $isroomrent;
    
        return $this;
    }

    /**
     * Get isroomrent
     *
     * @return boolean 
     */
    public function getIsroomrent()
    {
        return $this->isroomrent;
    }

    /**
     * Set cost
     *
     * @param integer $cost
     * @return House
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
    
        return $this;
    }

    /**
     * Get cost
     *
     * @return integer 
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set available
     *
     * @param boolean $available
     * @return House
     */
    public function setAvailable($available)
    {
        $this->available = $available;
    
        return $this;
    }

    /**
     * Get available
     *
     * @return boolean 
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * Set imagepathjsonstringlist
     *
     * @param string $imagepathjsonstringlist
     * @return House
     */
    public function setImagepathjsonstringlist($imagepathjsonstringlist)
    {
        $this->imagepathjsonstringlist = $imagepathjsonstringlist;
    
        return $this;
    }

    /**
     * Get imagepathjsonstringlist
     *
     * @return string 
     */
    public function getImagepathjsonstringlist()
    {
        return $this->imagepathjsonstringlist;
    }

    /**
     * Set otherinfo
     *
     * @param string $otherinfo
     * @return House
     */
    public function setOtherinfo($otherinfo)
    {
        $this->otherinfo = $otherinfo;
    
        return $this;
    }

    /**
     * Get otherinfo
     *
     * @return string 
     */
    public function getOtherinfo()
    {
        return $this->otherinfo;
    }

    /**
     * Set user
     *
     * @param \RealEstate\Entity\User $user
     * @return House
     */
    public function setUser(\RealEstate\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \RealEstate\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set type
     *
     * @param \RealEstate\Entity\HouseType $type
     * @return House
     */
    public function setType(\RealEstate\Entity\HouseType $type = null)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return \RealEstate\Entity\HouseType 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set size
     *
     * @param \RealEstate\Entity\Size $size
     * @return House
     */
    public function setSize(\RealEstate\Entity\Size $size = null)
    {
        $this->size = $size;
    
        return $this;
    }

    /**
     * Get size
     *
     * @return \RealEstate\Entity\Size 
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set address
     *
     * @param \RealEstate\Entity\Address $address
     * @return House
     */
    public function setAddress(\RealEstate\Entity\Address $address = null)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return \RealEstate\Entity\Address 
     */
    public function getAddress()
    {
        return $this->address;
    }
}