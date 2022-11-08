<?php

namespace Diouf\Drupal\passepro;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

/**
 * @Author DIOUF
 */
class PassproApi
{

    public const KEY = "gDW8a3XKRnY4g3sZix7X";
    public const DEFAULT_URI = "https://pro.dendreo.com/passpro/api/";



    private $client;

    public function __construct(){
        $this->client = HttpClient::create();
    }


    /**
     * Permet de lister tous les module de formation
     *
     * @return ResponseInterface
     * @throws TransportExceptionInterface
     */
    public function getAllModules(): ResponseInterface{
        return $this->client->request('GET', self::DEFAULT_URI."categories_module.php?key=".self::KEY);
    }


    /**
     * Permet de recuperer les 3 modules de formation se situant sur la barre gauche de la maquette
     *
     * @return array
     * @throws TransportExceptionInterface
     */
    public function getModulesMaquette(): array
    {

        $modules = [];
         foreach ($this->getAllModules()->toArray() as $module){
             if(in_array($module['id_categorie_module'], ['1', '2', '3'], true)){
                 $modules[] = $module;
             }
        }

        return $modules;
    }

    /**
     * retourne le nombre totale de module de l'api
     *
     * @return int|null
     * @throws ClientExceptionInterface
     * @throws DecodingExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ServerExceptionInterface
     * @throws TransportExceptionInterface
     */
    public function getNumberTatalOfModule(): ?int{
        return count($this->getAllModules()->toArray());
    }

    /**
     * Permet d'obtenir un module par son ID
     *
     * @param $id
     * @return mixed
     * @throws TransportExceptionInterface
     */
    public function getModuleByID($id){
       return $this->client->request('GET', self::DEFAULT_URI."categories_module.php?key=".self::KEY."&id=".$id)->toArray();
    }



    /**
     * Permet de lister tous les category de produit formation
     *
     * @return array
     * @throws TransportExceptionInterface
     */
    public function getAllCategoryProduits(): array
    {
        return $this->client->request('GET', self::DEFAULT_URI."categories_produit.php?key=".self::KEY)->toArray();
    }



    /**
     * Toutes les formations
     *
     * @return array
     * @throws ClientExceptionInterface
     * @throws DecodingExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ServerExceptionInterface
     * @throws TransportExceptionInterface
     */
    public function getAllFormations() {
        return $this->client->request('GET', self::DEFAULT_URI."modules.php?&include=formateurs_aptes&key=".self::KEY)->toArray();
    }



    /**
     * Liste des formations d'un catégorie
     *
     * @param int $id [l'id de la catégorie du sous module]
     *
     * @throws TransportExceptionInterface
     * @throws ServerExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws DecodingExceptionInterface
     * @throws ClientExceptionInterface
     */
    public function formationsByCategoryModule($id){
        return $this->client->request('GET', self::DEFAULT_URI."modules.php?id_categorie_module=$id&key=".self::KEY)->toArray();
    }






}