<?php

namespace HeadFirst\Command\SimpleRemote;

class GarageDoorOpenCommand implements Command
{
	private $garageDoor;

    public function __construct(GarageDoor $garageDoor)
    {
        $this->garageDoor = $garageDoor;
    }

	public function execute() {
		$this->garageDoor->up();
	}
}
