<?php

namespace Core\Base\Commands\Info;

use Core\Command\Command;
use Core\Command\Parameters;

class Help extends Command
{
    /**
     * {@inheritdoc}
     */
    protected $name = 'help';

    /**
     * {@inheritdoc}
     */
    protected $description = 'Displays the master help text';

    /**
     * Default command method.
     *
     * @param \Core\Commands\Parameters $p
     *
     * @return void
     */
    public function index(Parameters $p)
    {
        $commands = $this->app->getCommandList();
        $prefix = $this->getPrefix();

        if ($p->count() > 0) {
            foreach ($commands as $name => $command) {
                if (strtolower($p->first()) === $name) {
                    if ($name == 'help') {
                        $class = $command['class'];
                        $msg = "$prefix{$class->getName()} - {$class->getHelp()}\n"
                            .$class->parseDescription("\tUsage: {COMMAND} [COMMAND] - Display the help for a given command.");
                        $this->channel->sendMessage("```$msg```");
                    } else {
                        $this->displayCommandHelp($command);
                    }
                }
            }

            return;
        }

        $msg = "```Commands list\n\n";

        // Display commands first
        foreach ($commands as $command) {
            // Don't display sub commands. We'll do those upon request!
            // Also, don't display hidden commands
            if (!$command['is_alias'] && !($command['class']->isHidden())) {
                $msg .= $prefix.$command['class']->getName().' - '.$command['class']->getHelp()."\n";
            }
        }

        $msg .= "\nCommand aliases list\n\n";
        // Display aliases after commands
        foreach ($commands as $command) {
            if ($command['is_alias']) {
                $msg .= $prefix.$command['class']->getName().' - '.$command['class']->getHelp()."\n";
            }
        }
        $msg .= "```\nRun `{$prefix}help [command]` to get help on a specific command";

        $this->channel->sendMessage($msg);
    }

    /**
     * Displays the help message on the requested command.
     *
     * @param array $commandInfo
     *
     * @return void
     */
    private function displayCommandHelp(array $commandInfo)
    {
        $command = $commandInfo['class'];
        $alias = $commandInfo['is_alias'];
        $prefix = $this->getPrefix();

        $msg = "```$prefix{$command->getName()} - {$command->getHelp()}\n";

        if ($command->getUsage()) {
            $msg .= "\tUsage: {$command->parseDescription($command->getUsage())}\n";
        }

        if (count($commandInfo['sub_commands']) > 0) {
            $msg .= "\nSub commands:\n";
            foreach ($commandInfo['sub_commands'] as $scname) {
                $desc = $command->getSubCommandDescription($command, $scname);
                $msg .= "\t{$scname} - $desc\n";

                if ($command->getExample($scname)) {
                    $msg .= "\t\tUsage: {$command->getExample($scname)}\n\n";
                } else {
                    $msg .= "\n";
                }
            }
        }

        if ($alias) {
            $parent = $command->getParentCommand()->getName();
            $msg .= "Alias to: $prefix$parent\n";
        } else {
            $aliases = '';
            foreach ($this->app->getCommandList() as $name => $alias) {
                if ($alias['is_alias']) {
                    if ($command->getName() == $alias['class']->getParentCommand()->getName()) {
                        $aliases .= "\t- $name\n";
                    }
                }
            }

            if ($aliases !== '') {
                $msg .= "Command aliases:\n$aliases";
            }
        }

        $this->channel->sendMessage($msg.'```');
    }
}
