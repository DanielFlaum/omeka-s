<?php
namespace Omeka\Event;

use Zend\EventManager\Event as ZendEvent;

/**
 * Filter event.
 *
 * Trigger a filter event like so:
 * 
 * <code>
 * $arg = array('foo');
 * $event = new FilterEvent;
 * $event->setArg($arg);
 * $this->getEventManager()->trigger('myFilterEvent', $event);
 * $arg = $event->getArg();
 * </code>
 */
class FilterEvent extends ZendEvent
{
    /**#@+
     * Filters triggered by views.
     *
     * Use the view's controller name as the event identifier.
     */
    const VIEW_SHOW_AFTER   = 'view.show.after';
    const VIEW_BROWSE_AFTER = 'view.browse.after';

    /**
     * @var mixed The argument to filter.
     */
    protected $arg;

    /**
     * Set the argument to filter.
     *
     * @param mixed $arg
     */
    public function setArg($arg)
    {
        $this->arg = $arg;
    }

    /**
     * Get the argument to filter.
     *
     * @return mixed $arg
     */
    public function getArg()
    {
        return $this->arg;
    }
}
