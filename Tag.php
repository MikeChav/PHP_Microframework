<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 8/4/17
 * Time: 9:10 PM
 */

//object for each tag type
class Tag {
    private $name;
    private $attributes = array(); // associative array
    private $self_closing;
    private $nestable;
    private $contains = array(); //one dimension, numeric key array ; meant to simulate a linked list

    function __construct(string $name = '', array $attributes = [], bool $self_closing = false) {
        $this->name = $name;
        $this->attributes = $attributes;
        $this->self_closing = $self_closing;
    }

    /**
     * @return string
     */
    public function get_name(): string {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function set_name(string $name) {
        $this->name = $name;
    }

    /**
     * @return array
     */
    public function get_attributes(): array {
        return $this->attributes;
    }

    /**
     * @param array $attributes
     */
    public function set_attributes(array $attributes) {
        $this->attributes = $attributes;
    }

    function add_attribute(string $name, $value) {
        $this->attributes[$name] = $value;
    }


    function add_attributes(array $attributes) {
        $this->attributes = array_merge($this->attributes, $attributes);
    }

    /**
     * @return bool
     */
    public function is_self_closing(): bool {
        return $this->self_closing;
    }

    /**
     * @param bool $self_closing
     */
    public function set_self_closing(bool $self_closing) {
        $this->self_closing = $self_closing;
    }

    public function add(Tag $tag) {
        $this->contains = array_merge($this->contains, $tag);
    }

    public function add_all(Tag ... $tags) {
        $this->contains = array_merge($this->contains, $tags);
    }

    public function __toString() : string {
        $response =  "<$this->name";
        foreach ($this->attributes as $attribute => $value) {
            $response .= " $attribute";
            if (isset($value)) {
                $response .= "='$value'";
            }
        }
        if ($this->self_closing) {
            $response .= " />";
        }
        else {
            $response .= ">";
            foreach ($this->contains as $tag) {
                ob_start();
                echo $tag;
                $response .= ob_get_clean();
            }
            $response .= "</$this->name>";
        }
        return $response;
    }

}