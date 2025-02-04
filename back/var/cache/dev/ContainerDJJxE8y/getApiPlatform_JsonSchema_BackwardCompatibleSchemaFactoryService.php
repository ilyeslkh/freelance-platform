<?php

namespace ContainerDJJxE8y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_JsonSchema_BackwardCompatibleSchemaFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.json_schema.backward_compatible_schema_factory' shared service.
     *
     * @return \ApiPlatform\JsonSchema\BackwardCompatibleSchemaFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/json-schema/SchemaFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/json-schema/SchemaFactoryAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/json-schema/BackwardCompatibleSchemaFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/hydra/JsonSchema/SchemaFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/json-schema/ResourceMetadataTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/json-schema/SchemaFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/json-schema/DefinitionNameFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/json-schema/DefinitionNameFactory.php';

        return $container->privates['api_platform.json_schema.backward_compatible_schema_factory'] = new \ApiPlatform\JsonSchema\BackwardCompatibleSchemaFactory(new \ApiPlatform\Hydra\JsonSchema\SchemaFactory(new \ApiPlatform\JsonSchema\SchemaFactory(($container->privates['api_platform.metadata.resource.metadata_collection_factory.cached'] ?? self::getApiPlatform_Metadata_Resource_MetadataCollectionFactory_CachedService($container)), ($container->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? self::getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService($container)), ($container->privates['api_platform.metadata.property.metadata_factory.cached'] ?? self::getApiPlatform_Metadata_Property_MetadataFactory_CachedService($container)), ($container->privates['api_platform.hydra.name_converter.hydra_prefix'] ?? self::getApiPlatform_Hydra_NameConverter_HydraPrefixService($container)), ($container->privates['api_platform.resource_class_resolver'] ?? self::getApiPlatform_ResourceClassResolverService($container)), $container->parameters['api_platform.jsonschema_formats'], new \ApiPlatform\JsonSchema\DefinitionNameFactory($container->parameters['api_platform.jsonschema_formats'])), $container->parameters['api_platform.serializer.default_context']));
    }
}
