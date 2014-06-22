<?php
/**
 * Modèle de donnée des utilisateurs
 *
 * PHP version 5.5
 *
 * @category   Modèles
 * @package    worldcup\app\models
 * @author     Clément Hémidy <clement@hemidy.fr>, Fabien Côté <fabien.cote@me.com>
 * @copyright  2014 Clément Hémidy, Fabien Côté
 * @version    0.1
 * @since      0.1
 */


class User extends Eloquent {

    /**
     * Table corespondant sur le SGBD
     *
     * @var string
     */
    protected $table = 'user';

    /**
     * Définition des règles de vérifications pour les entrées utilisateurs et le non retour des erreur mysql
     *
     * @var array
     */
    public static $rules = array(
        'username' => 'required|alpha_num|max:255',
        'password' => 'required|alpha_num|max:255',
        'points' => 'required|integer',
        'firstname' => 'required|alpha_num|max:255',
        'lastname' => 'required|alpha_num|max:255',
    );
}