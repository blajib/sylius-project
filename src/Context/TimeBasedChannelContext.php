<?php

namespace App\Context;

use App\DateTime\Clock;
use App\DateTime\ClockInterface;
use Sylius\Component\Channel\Context\ChannelContextInterface;
use Sylius\Component\Channel\Context\ChannelNotFoundException;
use Sylius\Component\Channel\Model\ChannelInterface;
use Sylius\Component\Channel\Repository\ChannelRepositoryInterface;
use Symfony\Component\Form\ClickableInterface;

class TimeBasedChannelContext implements ChannelContextInterface
{

    /**
     * @var ChannelRepositoryInterface
     */
    private $channelRepository;

    /**
     * @var ClockInterface
     */
    private $clock;

    /**
     * @param ChannelRepositoryInterface $channelRepository
     */
    public function __construct(ChannelRepositoryInterface $channelRepository, ClockInterface  $clock)
    {
        $this->channelRepository = $channelRepository;
        $this->clock = $clock;
    }

    public function getChannel(): ChannelInterface
    {
        if ($this->clock->isNight()){
            return $this->channelRepository->findOneByCode('NIGHT');
        }

        return $this->channelRepository->findOneBy([]);
    }


}
