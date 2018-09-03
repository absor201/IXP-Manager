<?php

namespace Repositories;

use Doctrine\ORM\EntityRepository;

/**
 * CompanyRegisteredDetail
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CompanyRegisteredDetail extends EntityRepository
{
    /**
     * Get all the juridictions
     *
     * @return array Array of juridiction
     */
    public function getJuridictionsAsArray(){
        $dql = "SELECT DISTINCT crd.jurisdiction
                FROM Entities\\CompanyRegisteredDetail crd
                WHERE  crd.jurisdiction != '' ";

        return $this->getEntityManager()->createQuery( $dql )->getResult();
    }
}