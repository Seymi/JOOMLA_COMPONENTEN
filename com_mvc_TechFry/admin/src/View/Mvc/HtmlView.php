// Assign data to the view
$this->msg = $this->get('Msg');

namespace TechFry\Component\Mvc\Administrator\View\Mvc;

defined('_JEXEC') or die;

use Joomla\CMS\MVC\View\HtmlView as BaseHtmlView;

class HtmlView extends BaseHtmlView
{
    public function display($tpl = null)
    {
        parent::display($tpl);
    }
}
