<?php

/**
 * PluginPosCommentTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class PluginPosCommentTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object PluginPosCommentTable
     */
    const is_active = 1;
    const is_show = 1;
    const r = 17; /* Bán kính 17 km */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('PluginPosComment');
    }
    public function getCommentAll($posId){
      $q = $this->createQuery()
        ->where('pos_id =?',$posId)
        ->andWhere('status =?',1)
        ->orderBy('created_at DESC');
      return $q->execute();
    }
    
    public function getCountComment($posId){
      $q = $this->createQuery()
        ->where('pos_id =?',$posId)
        ->andWhere('status =?',1)
        ->orderBy('created_at DESC');
      return $q->count();
    }
    public function getCommentAllPager($posId, $page = 1, $size = 5){
      $q = $this->getOrderdQuery($posId);
      
      return $this->getPager($q, $page, $size);
    }
    
    public function getOrderdQuery($posId)
    {
      return $this->createQuery()
        ->where('pos_id =?',$posId)
        ->andWhere('status =?',1)
        ->orderBy('created_at DESC');
    }
    
    protected function getPager(Doctrine_Query $q, $page, $size)
    {
      $pager = new sfDoctrinePager('PosComment', $size);
      $pager->setQuery($q);      
      $pager->setPage($page);
      $pager->init();
      return $pager;
    }

    /* Dem so lan comment cua member  */
   public function getNumberOfComment($memberId){
      $q = $this->createQuery()
        ->where('member_id = ?',$memberId);
      
      return $q->count();
   }
   
   /* Lay thong tin comment, pos cua dia diem member da comment */
   public function getListComment($memberId,$num = null){
     if($num == null){
      $q = $this->createQuery()
       ->where('member_id = ?', $memberId)
       ->orderBy('created_at DESC');
     }else{
        $q = $this->createQuery()
         ->where('member_id = ?', $memberId)
         ->orderBy('created_at DESC')
         ->limit($num);
      }
      return $q->execute();
   }
   /* Lấy các địa điểm được member comment mới nhất, các địa điểm không trùng nhau */
   public function getListCommentOfMember($memberId,$num = null){
     if($num == null){
      $q = $this->createQuery()
       ->select('DISTINCT pos_id as pos_id')
       ->where('member_id = ?', $memberId)
       ->orderBy('created_at DESC');
     }else{
        $q = $this->createQuery()
         ->select('DISTINCT pos_id as pos_id')
         ->where('member_id = ?', $memberId)
         ->orderBy('created_at DESC')
         ->limit($num);
      }
      return $q->execute();
   }
   
   /*
    * @author: tuent
    * tr? v? danh s�ch comment
    * @param $posId: id c?a d?a di?m
    * @param $num: s? lu?ng comment c?n l?y
    */
   public function getComments($posId, $num){
       $q = $this->createQuery('pc')
           ->where('pc.pos_id = ?', $posId)
           ->orderBy('pc.created_at DESC')
           ->limit($num);
       
       return $q->execute();
   }
   /*sql show danh sách địa điểm member comment */
   public function getSqlMemberCommentList($memberId){
         return $q = $this->createQuery()
          ->where('member_id = ?',$memberId)
          ->orderBy('created_at DESC');
    }
   /* Danh sách những địa điểm có comment mới */
   public function getNewestCommentPosList($num){
      if($num)
        return $q = $this->createQuery('pc')
          ->innerJoin('pc.PosCategory pcr')
          ->where('pc.status =?',self::is_active)
          ->andWhere('pcr.type =?',self::is_show)
          ->orderBy('pc.created_at DESC')
          ->limit($num)
          ->execute();
   }
   /* Danh sách những địa điểm có nhiều cảm nhận */
   public function getManyCommentMemberPosList($num){
     if($num)
      return $q = $this->createQuery('pc')
          ->select('pc.pos_id,count(pc.pos_id) as num_of_member')
          ->innerJoin('pc.PosCategory pcr')
          ->where('pc.status =?',self::is_active)
          ->andWhere('pcr.type =?',self::is_show)
          ->groupBy('pc.pos_id')
          ->orderBy('num_of_member DESC')
          ->limit($num)
          ->execute();
   }
   /* Danh sách nhà cho thuê có comment mới */
   public function getNewestCommentRentHouseList($num){
        /* Tìm pos_category_id tương ứng với nhà cho thuê */
        $posCategory = Doctrine::getTable('PosCategory')->getCategoryFromCode(PluginPosCategoryTable::rent_house_code);
        if($num)
        return $q = $this->createQuery('pc')
          ->where('pc.status =?',self::is_active)
          ->andWhere('pos_category_id =?',$posCategory->getId())
          ->orderBy('pc.created_at DESC')
          ->limit($num)
          ->execute();
   }
   /* Danh sách nhà cho thuê nhiều comment */
   public function getManyCommentMemberRentHouseList($num){
     $posCategory = Doctrine::getTable('PosCategory')->getCategoryFromCode(PluginPosCategoryTable::rent_house_code);
     if($num){
      $q = $this->createQuery('pc')
          ->select('pc.pos_id,count(pc.pos_id) as num_of_member')
          ->where('pc.status =?',self::is_active)
          ->andWhere('pos_category_id =?',$posCategory->getId())
          ->groupBy('pc.pos_id')
          ->orderBy('num_of_member DESC')
          ->limit($num);
          return $q->execute();
     }
   }

   /* pager danh sách những địa điểm có nhiều comment */
   public function getManyCommentMemberPosListPager($page = 1,$size = 30){
        $q = $this->createQuery('pc')
          ->select('pc.pos_id,count(pc.pos_id) as num_of_member')
          ->innerJoin('pc.PosCategory pcr')
          ->where('pc.status =?',self::is_active)
          ->andWhere('pcr.type =?',self::is_show)
          ->groupBy('pc.pos_id')
          ->orderBy('num_of_member DESC');
        return $this->getPager($q,$page,$size);
   }

   /* pager danh sách những nhà cho thuê có nhiều comment */
   public function getManyCommentMemberRentHouseListPager($page = 1,$size = 30){
      $posCategory = Doctrine::getTable('PosCategory')->getCategoryFromCode(PluginPosCategoryTable::rent_house_code);
      $q = $this->createQuery('pc')
          ->select('pc.pos_id,count(pc.pos_id) as num_of_member')
          ->where('pc.status =?',self::is_active)
          ->andWhere('pos_category_id =?',$posCategory->getId())
          ->groupBy('pc.pos_id')
          ->orderBy('num_of_member DESC');
      return $this->getPager($q,$page,$size);
   }
   /* pager danh sách những địa điểm có comment mới */
   public function getNewestCommentPosListPager($page = 1,$size = 30){
        $q = $this->createQuery('pc')
          ->innerJoin('pc.PosCategory pcr')
          ->where('pc.status =?',self::is_active)
          ->andWhere('pcr.type =?',self::is_show)
          ->orderBy('pc.created_at DESC');
        return $this->getPager($q,$page,$size);
   }
   /* pager danh sách nhà cho thuê có comment mới */
   public function getNewestCommentRentHouseListPager($page = 1,$size = 30){
        $posCategory = Doctrine::getTable('PosCategory')->getCategoryFromCode(PluginPosCategoryTable::rent_house_code);
        $q = $this->createQuery('pc')
          ->where('pc.status =?',self::is_active)
          ->andWhere('pos_category_id =?',$posCategory->getId())
          ->orderBy('pc.created_at DESC');
        return $this->getPager($q,$page,$size);
   }
   public function getPosMemberNewCommentPager($page = 1,$size = 30,$position = null){
        $q = $this->createQuery('pc')
          ->innerJoin('pc.Pos p')
          ->where('pc.status =?',self::is_active)
          ->andWhere('p.type =?',self::is_show)
          ->andWhere('lat < ?', $position['max_lat'])
          ->andWhere('lat > ?', $position['min_lat'])
          ->andWhere('lng < ?', $position['max_lng'])
          ->andWhere('lng > ?', $position['min_lng'])
          ->orderBy('pc.created_at DESC');
        if($q->count()){
            return $this->getPager($q,$page,$size);
        }else{
            $position = opToolkit::expansionAreaSearch($position, self::r);
            $q = $this->createQuery('pc')
              ->innerJoin('pc.Pos p')
              ->where('pc.status =?',self::is_active)
              ->andWhere('p.type =?',self::is_show)
              ->andWhere('lat < ?', $position['max_lat'])
              ->andWhere('lat > ?', $position['min_lat'])
              ->andWhere('lng < ?', $position['max_lng'])
              ->andWhere('lng > ?', $position['min_lng'])
              ->orderBy('pc.created_at DESC');
           if($q->count()){
              return $this->getPager($q,$page,$size);
           }else{
              return $this->getNewestCommentPosListPager($page,$size);
           }
        }
   }
   /* Địa điểm có nhiều người cảm nhận trong giới hạn bản đồ */
   public function getPosManyMemberComment($page = 1,$size = 30,$position = null){
        $q = $this->createQuery('pc')
          ->select('pc.pos_id,count(pc.pos_id) as num_of_member')
          ->innerJoin('pc.Pos p')
          ->where('pc.status =?',self::is_active)
          ->andWhere('p.type =?',self::is_show)
          ->andWhere('lat < ?', $position['max_lat'])
          ->andWhere('lat > ?', $position['min_lat'])
          ->andWhere('lng < ?', $position['max_lng'])
          ->andWhere('lng > ?', $position['min_lng'])
          ->groupBy('pc.pos_id')
          ->orderBy('num_of_member DESC');
       if($q->count()){
            return $this->getPager($q,$page,$size);
       }else{
          $position = opToolkit::expansionAreaSearch($position, self::r);
          $q = $this->createQuery('pc')
              ->select('pc.pos_id,count(pc.pos_id) as num_of_member')
              ->innerJoin('pc.Pos p')
              ->where('pc.status =?',self::is_active)
              ->andWhere('p.type =?',self::is_show)
              ->andWhere('lat < ?', $position['max_lat'])
              ->andWhere('lat > ?', $position['min_lat'])
              ->andWhere('lng < ?', $position['max_lng'])
              ->andWhere('lng > ?', $position['min_lng'])
              ->groupBy('pc.pos_id')
              ->orderBy('num_of_member DESC');
          if($q->count()){
              return $this->getPager($q,$page,$size);
          }else{
              return $this->getManyCommentMemberPosListPager($page,$size);
          }
       }
   }
   /* huent
    * Comment mới nhất cho địa điểm */
   public function getTheNewestComment($posId){
      $q = $this->createQuery()
          ->where('pos_id =?',$posId)
          ->orderBy('created_at DESC');
        return $q->fetchOne();
   }
}