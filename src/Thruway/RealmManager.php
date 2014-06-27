<?php
/**
 * Created by PhpStorm.
 * User: matt
 * Date: 6/9/14
 * Time: 11:04 PM
 */

namespace Thruway;


class RealmManager {
    private $realms;

    function __construct()
    {
        $this->realms = array();
    }

    /**
     * @param string
     * @throws \UnexpectedValueException
     * @return Realm
     */
    public function getRealm($realmName) {
        if ( ! static::validRealmName($realmName)) throw new \Exception("Bad realm name");

        if ( ! array_key_exists($realmName, $this->realms)) {
            $this->realms[$realmName] = new Realm($realmName);
        }

        return $this->realms[$realmName];
    }

    static public function validRealmName($name) {
        // check to see if this is a valid name
        // TODO maybe use similar checks to Autobahn|Py
        if (strlen($name) < 1) return false;
            //throw new \UnexpectedValueException("Realm name too short: " . $realmName);
        if ($name == "WAMP1") return false;
            //throw new \UnexpectedValueException("Realm name \"WAMP1\" is reserved.");

        return true;
    }

    /**
     * @return array
     */
    public function getRealms()
    {
        return $this->realms;
    }


} 