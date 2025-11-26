<?php
declare(strict_types=1);

namespace HansPeterOrding\SleeperApiClient\ApiClient\Denormalizers;

use HansPeterOrding\SleeperApiClient\Dto\SleeperRosterMetadata;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class SleeperRosterMetadataDenormalizer implements DenormalizerInterface, DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    private const ALREADY_CALLED = 'sleeper_roster_metadata_denormalizer_already_called';

    public function supportsDenormalization(
        $data,
        string $type,
        string $format = null,
        array $context = []
    ): bool {
        // Wenn wir in diesem Kontext schon einmal gelaufen sind → nicht nochmal
        if (($context[self::ALREADY_CALLED] ?? false) === true) {
            return false;
        }

        return $type === SleeperRosterMetadata::class && \is_array($data);
    }

    public function denormalize(
        $data,
        string $type,
        string $format = null,
        array $context = []
    ): mixed {
        if (!\is_array($data)) {
            // Fallback – sollte praktisch kaum passieren
            $context[self::ALREADY_CALLED] = true;
            return $this->denormalizer->denormalize($data, $type, $format, $context);
        }

        // Markieren, dass wir für diesen Durchlauf schon dran waren
        $context[self::ALREADY_CALLED] = true;

        $nicknames = [];
        $filtered  = [];

        foreach ($data as $key => $value) {
            if (\is_string($key) && str_starts_with($key, 'p_nick_')) {
                $playerId = substr($key, \strlen('p_nick_'));
                if ($playerId !== '' && $value !== null && $value !== '') {
                    $nicknames[$playerId] = (string) $value;
                }
            } else {
                $filtered[$key] = $value;
            }
        }

        /** @var SleeperRosterMetadata $metadata */
        $metadata = $this->denormalizer->denormalize($filtered, $type, $format, $context);

        if ($nicknames !== []) {
            $metadata->setPlayerNicknames($nicknames);
        }

        return $metadata;
    }

    public function getSupportedTypes(?string $format): array
    {
        // false = supportsDenormalization wird weiterhin aufgerufen (wichtig wegen Context-Flag)
        return [
            SleeperRosterMetadata::class => false,
        ];
    }
}
