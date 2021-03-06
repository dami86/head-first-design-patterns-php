<?php

namespace HeadFirst\Factory\Pizzaaf;

abstract class Pizza
{
	protected $name;
	protected $dough;
	protected $sauce;
	protected $veggies;
    protected $cheese;
    protected $pepperoni;
    protected $clam;

    public function __construct()
    {
        $this->veggies = array();
    }

	abstract function prepare();

    public function bake() {
        return "Bake for 25 minutes at 350";
	}

	public function cut() {
        return "Cutting the pizza into diagonal slices";
	}

	public function box() {
        return "Place pizza in official PizzaStore box";
	}

	public function setName($name) {
        $this->name = $name;
		return $this->name;
	}

	public function getName() {
		return $this->name;
	}
//
//	public String toString() {
//		StringBuffer result = new StringBuffer();
//		result.append("---- " + name + " ----\n");
//		if (dough != null) {
//			result.append(dough);
//			result.append("\n");
//		}
//		if (sauce != null) {
//			result.append(sauce);
//			result.append("\n");
//		}
//		if (cheese != null) {
//			result.append(cheese);
//			result.append("\n");
//		}
//		if (veggies != null) {
//			for (int i = 0; i < veggies.length; i++) {
//				result.append(veggies[i]);
//				if (i < veggies.length-1) {
//					result.append(", ");
//				}
//			}
//			result.append("\n");
//		}
//		if (clam != null) {
//			result.append(clam);
//			result.append("\n");
//		}
//		if (pepperoni != null) {
//			result.append(pepperoni);
//			result.append("\n");
//		}
//		return result.toString();
//	}
}
