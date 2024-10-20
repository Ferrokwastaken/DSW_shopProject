<?php
    namespace Dsw\Shop;

    use Element;

class Shop {
    private $elements = [];

    public function addElement(Element $element) {
        $this->elements[] = $element;
    }

    public function showElements() {
        foreach ($this->elements as $element) {
            $element->toString();
        }
    }

    public function showServices() {
        foreach ($this->elements as $element) {
            if ($element instanceof Services) {
                $element->toString();
            }
        }
    }

    public function showEvents() {
        foreach ($this->elements as $element) {
            if ($element instanceof Events) {
                $element->toString();
            }
        }
    }

    public function showSessiones() {
        foreach ($this->elements as $element) {
            if ($element instanceof Sessions) {
                $element->toString();
            }
        }
    }

    public function showMixedServices() {
        foreach ($this->elements as $element) {
            if ($element instanceof MixedServices) {
                $element->toString();
            }
        }
    }

    // no caducados y disponibles
    public function showSaleable() {
        foreach ($this->elements as $element) {
            if ($element instanceof MixedServices && $element->isSaleable()) {
                $element->toString();
            }
        }
    }
}