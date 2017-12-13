<?php
/**
 * Created by PhpStorm.
 * User: Gytis
 * Date: 2017-12-09
 * Time: 10:14
 */

namespace app\model\interfaces;


interface Destroyable
{
    public function destroy ();

    public function delete ();
}