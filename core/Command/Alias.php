<?php

namespace Core\Command;

class Alias extends Command
{
    /**
     * The name of the command that the alias is tied to.
     *
     * @var string
     */
    public $alias = '';

    /**
     * Gets the alias' parent command.
     *
     * @return mixed
     */
    public function getParentCommand()
    {
        return $this->app->getCommandList()[$this->alias]['class'];
    }

    /**
     * Executes another command as an alias.
     *
     * @param string                    $command
     * @param string                    $method
     * @param \Core\Commands\Parameters $params
     *
     * @return void
     */
    protected function runCommand($method, Parameters $params = null)
    {
        foreach ($this->app->getCommandList() as $cmd => $value) {
            if ($cmd == $this->alias) {
                $class = $value['class'];
                if (method_exists(get_class($class), $method)) {
                    $class->setMessage($this->message);

                    if (is_null($params)) {
                        $class->$method();
                    } else {
                        $class->$method($params);
                    }
                }
            }
        }
    }
}
