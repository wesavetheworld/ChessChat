<?php

/**
 * Models are created by passing a data array
 * @author Philipp Miller
 */
abstract class DatabaseModel {
    
    /**
     * Constructor expects an array containing data.
     * Subclasses should ensure that crucial data
     * was provided.
     * @param     array<mixed>
     */
    public function __construct(array $data) {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }
    
    // abstract public function save(); // TODO
}
