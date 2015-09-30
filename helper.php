<?php

class categories
{
    var $cats;

    public function __construct( $cats )
    {
        $this ->cats = $cats;

    }

    public function getCategories()
    {
        $db = JFactory::getDBO();
        $query = $db->getQuery(true);

        $query = "select jc.* ,(select imgfilename from 
              #__joomgallery as j 
              where j.catid = jc.cid
              order by RAND()
              limit 1
              ) as imgfilename

            from #__joomgallery_catg as jc
            where published = 1";

           if ( $this ->cats != 0 ){ 
            $query .= ' and cid in (' . $this ->cats . ') ';
            }
            $query .= " and cid != 1
            order by parent_id, lft
            ";


        //echo $query;
        $db->setQuery($query);
        $result = $db->loadAssocList();

        return $result;

    }

}




