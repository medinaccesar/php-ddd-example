<?php

namespace CodelyTv\Context\Video\Module\Video\Domain\Create;

use CodelyTv\Infrastructure\Bus\Event\DomainEvent;

/**
 * @method string title()
 * @method string url()
 * @method string courseId()
 */
final class VideoCreatedDomainEvent extends DomainEvent
{
    public static function eventName(): string
    {
        return 'video_created';
    }

    protected function rules(): array
    {
        return [
            'title'    => ['string'],
            'url'      => ['string'],
            'courseId' => ['string'],
        ];
    }
}
