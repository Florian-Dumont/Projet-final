<?php

class Page
{
    private int $id;
    
    private string $label;

    private string $slug;


    /**
     * @param int $id
     * @param string $label
     * @param string $slug
     */
    public function __construct(int $id, string $label, string $slug)
    {
        $this->id = $id;
        $this->label = $label;
        $this->slug = $slug;
    }
    
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }
    

    /**
     * @return string
     */
    public function getlabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setlabel(string $label): void
    {
        $this->label = $label;
    }

    /**
     * @return string
     */
    public function getslug(): string
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     */
    public function setslug(string $slug): void
    {
        $this->slug = $slug;
    }
}