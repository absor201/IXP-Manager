<?php

namespace Repositories;

use Doctrine\ORM\EntityRepository;

/**
 * Patch Panel
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PatchPanel extends EntityRepository
{

    /**
     * Return the number of port for a patch panel and by states
     * (and with the option to specify types - returns normal (non-private)
     * VLANs by default.
     *
     * @param $id int the ID of the patch panel
     * @param $status array array of patch panel port states
     * @return int number of patch panel port
     */
    public function getAllPortByStatusForAPatchPanel(int $id, array $status){
        $dql = "SELECT count(ppp.id)
                    FROM Entities\\PatchPanelPort ppp
                    JOIN ppp.patchPanel pp
                    WHERE
                        pp.id = $id
                    AND 
                        ppp.state IN (".implode(",", $status).")";

        $query = $this->getEntityManager()->createQuery( $dql );
        $nb = $query->getSingleScalarResult();

        return $nb;
    }


    /**
     * Return an array of all patch panel names by location and cable types where the array key is the patch panel id.
     *
     * @param $location int The ID of the location wanted
     * @param $cableype int the ID of the cable Type
     *
     * @return array An array of all patch panel names with the patch panel id as the key.
     */
    public function getByLocationAndCableTypeAsArray(int $location, int $cableType): array {
        $ppList = [];

        $dql = "SELECT pp
                  FROM Entities\PatchPanel pp
                      LEFT JOIN pp.cabinet cab
                      LEFT JOIN cab.Location l ";

        $wheres = [];

        if( $location ) {
            $wheres[] = "l.id = " . $location;
        }


        if( $cableType ) {
            $wheres[] = "pp.cable_type = " . $cableType;
        }

        if( count( $wheres ) ) {
            $dql .= 'WHERE ' . implode(' AND ', $wheres);
        }

        $dql .= " ORDER BY pp.id ASC";


        foreach($this->getEntityManager()->createQuery( $dql )->getResult() as $pp){
            $ppList[$pp->getId()] = $pp->getName();
        }

        return $ppList;
    }
}
