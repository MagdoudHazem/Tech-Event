<?php

namespace MaterialBundle\Enum;

abstract class MaterialTypeEnum
{
    const TYPE_TABLE_ROND = "Rond";
    const TYPE_TABLE_CARRE = "Carré";
    const TYPE_TABLE_FormeU = "Forme U";

    const TYPE_SALLE_AMPHI_THEATRE = "Amphithéâtre";
    const TYPE_SALLE_ARENE = "Arènes";
    const TYPE_SALLE_CABARET = "Cabaret‎";
    const TYPE_SALLE_OPERA = "Salle Dopéra‎";
    const TYPE_SALLE_THEATRE = "Théatre";


    const TYPE_LUMIERE_NORMAL = "Normal";
    const TYPE_LUMIERE_ANIMATION = "Eclairage D'animation";
    const TYPE_LUMIERE_TRADITIONAL = "Eclairage traditionnel";
    const TYPE_LUMIERE_ARCHITECTURAL = "Eclairage architectural";
    const TYPE_LUMIERE_DECORATION = "Eclairage de décoration";

    /** @var array user friendly named type */
    protected static $typeName = [
        self::TYPE_TABLE_ROND => 'Rond',
        self::TYPE_TABLE_CARRE => 'Carré',
        self::TYPE_TABLE_FormeU => 'Forme U',

        self::TYPE_SALLE_AMPHI_THEATRE => 'Amphithéâtre',
        self::TYPE_SALLE_ARENE => 'Arènes',
        self::TYPE_SALLE_CABARET => 'Cabaret‎',
        self::TYPE_SALLE_OPERA => 'Salle Dopéra‎',
        self::TYPE_SALLE_THEATRE => 'Théatre',

        self::TYPE_LUMIERE_NORMAL => 'Normal',
        self::TYPE_LUMIERE_ANIMATION => 'Eclairage D\'animation',
        self::TYPE_LUMIERE_TRADITIONAL => 'Eclairage traditionnel',
        self::TYPE_LUMIERE_ARCHITECTURAL => 'Eclairage architectural',
        self::TYPE_LUMIERE_DECORATION => 'Eclairage de décoration',
    ];

    /**
     * @param  string $typeShortName
     * @return string
     */
    public static function getTypeName($typeShortName)
    {
        if (!isset(static::$typeName[$typeShortName])) {
            return "Unknown type ($typeShortName)";
        }

        return static::$typeName[$typeShortName];
    }

    /**
     * @return array<string>
     */
    public static function getAvailableTableTypes()
    {
        return [
            self::TYPE_TABLE_ROND,
            self::TYPE_TABLE_CARRE,
            self::TYPE_TABLE_FormeU,
        ];
    }

    /**
     * @return array<string>
     */
    public static function getAvailableSalleTypes()
    {
        return [
            self::TYPE_SALLE_AMPHI_THEATRE,
            self::TYPE_SALLE_ARENE,
            self::TYPE_SALLE_CABARET,
            self::TYPE_SALLE_OPERA,
            self::TYPE_SALLE_THEATRE
        ];
    }

    /**
     * @return array<string>
     */
    public static function getAvailableLumiereTypes()
    {
        return [
            self::TYPE_LUMIERE_NORMAL,
            self::TYPE_LUMIERE_ARCHITECTURAL,
            self::TYPE_LUMIERE_DECORATION,
            self::TYPE_LUMIERE_ANIMATION,
            self::TYPE_LUMIERE_TRADITIONAL,
        ];
    }

}