<?php
/**
 * Centurion
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@centurion-project.org so we can send you a copy immediately.
 *
 * @category    Centurion
 * @package     Centurion_Contrib
 * @subpackage  Media
 * @copyright   Copyright (c) 2008-2011 Octave & Octave (http://www.octaveoctave.com)
 * @license     http://centurion-project.org/license/new-bsd     New BSD License
 * @version    $Id$
 */

/**
 * @category    Centurion
 * @package     Centurion_Contrib
 * @subpackage  Media
 * @copyright   Copyright (c) 2008-2011 Octave & Octave (http://www.octaveoctave.com)
 * @license     http://centurion-project.org/license/new-bsd     New BSD License
 * @author      Florent Messa <florent.messa@gmail.com>
 * @author      Mathias Desloges <m.desloges@gmail.com>
 * @author      Laurent Chenay <lc@centurion-project.org>
 */
class Media_Model_DbTable_Row_Duplicate extends Centurion_Db_Table_Row_Abstract
{
    /**
     * We remove the file on the adapter before removing it in DB.
     *
     * @return int
     */
    public function delete()
    {
        if (!empty($this->adapter)) {
            $staticAdapter = Media_Model_Adapter::factory($this->adapter, unserialize($this->params));
            $staticAdapter->delete($this->dest);
        }
        
        return parent::delete();
    }
}
