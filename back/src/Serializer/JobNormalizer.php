<?php
namespace App\Serializer;

use App\Entity\Job;
use Symfony\Component\Serializer\Normalizer\ContextAwareNormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class JobNormalizer implements ContextAwareNormalizerInterface
{
    private ObjectNormalizer $normalizer;

    public function __construct(ObjectNormalizer $normalizer)
    {
        $this->normalizer = $normalizer;
    }

    public function normalize($object, string $format = null, array $context = [])
    {
        if (!$this->supportsNormalization($object, $format)) {
            return null;
        }

        // Normalisation standard
        $data = $this->normalizer->normalize($object, $format, $context);

        // Personnalisation : Suppression de champs sensibles
        unset($data['userJob']); // Pour éviter d'exposer directement l'utilisateur
        
        // Ajout d'un champ calculé pour afficher le client
        if ($object->getUserJob()) {
            $data['client'] = [
                'id' => $object->getUserJob()->getId(),
                'username' => $object->getUserJob()->getUsername(),
            ];
        }

        // Formatage du budget
        $data['formattedBudget'] = number_format((float) $object->getBudget(), 2, ',', ' ') . ' €';

        // Ajout des catégories
        $data['categories'] = array_map(function ($category) {
            return [
                'id' => $category->getId(),
                'name' => $category->getName()
            ];
        }, $object->getCategories()->toArray());

        return $data;
    }

    public function supportsNormalization($data, string $format = null, array $context = []): bool
    {
        return $data instanceof Job;
    }
}
