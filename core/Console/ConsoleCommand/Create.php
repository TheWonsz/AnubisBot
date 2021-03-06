<?php

namespace Core\Console\ConsoleCommand;

use Core\Utils\File;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class Create extends Command
{
    /**
     * Configure Symfony Command.
     *
     * @return void
     */
    protected function configure()
    {
        $this->setName('make:console')
        ->setDescription('Creates a new console command template')
        ->setDefinition(new InputDefinition([
            new InputArgument('name', InputArgument::REQUIRED, 'The name of the console command class to create (CammelCase please)'),
            new InputOption('part', 'p', InputOption::VALUE_REQUIRED, 'Specify where to generate the console command (app|core)'),
        ]));
    }

    /**
     * Execute console command.
     *
     * @param \Symfony\Component\Console\Input\InputInterface   $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument('name');
        $part = $input->getOption('part');

        $exp = explode('\\', $name);
        $namespace = 'App\\Console'; // By default, leave it at the app/commands directory
        $dTree = ''; // Directory tree for generating folders for the command

        if (!is_null($part)) {
            switch (strtolower($part)) {
                case 'core':
                    $namespace = 'Core\\Console';
                    $dTree = base_path().'/core/Console';
                    break;
                case 'app':
                    $dTree = console_path();
                    break;
                default:
                    throw new \Exception('Invalid part option! Use app or core');
            }
        } else {
            $dTree = console_path();
        }

        for ($i = 0; $i < count($exp); $i++) {
            if ($i == (count($exp) - 1)) {
                $name = $exp[$i];
                $nametolower = strtolower($name);
            } else {
                $namespace .= '\\'.$exp[$i];
                $dTree .= '/'.$exp[$i];
            }
        }

        if (!file_exists($dTree)) {
            mkdir($dTree, 0777, true);
        }

        $content = <<<EOF
<?php

namespace $namespace;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class $name extends Command
{
    /**
     * Configure Symfony Command.
     *
     * @return void
     */
    protected function configure()
    {
        \$this->setName('$nametolower');
    }

    /**
     * Execute console command.
     *
     * @param \Symfony\Component\Console\Input\InputInterface   \$input
     * @param \Symfony\Component\Console\Output\OutputInterface \$output
     *
     * @return void
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$output->writeln("<info>This is your $name command!</>");
    }
}

EOF;

        $cpath = $dTree;
        $filename = $name.'.php';
        $filepath = $cpath.'/'.$filename;

        if (!File::exists($filepath)) {
            File::writeTo($filepath, $content);

            $output->writeln("<info>Console command: $name created</>");

            shell_exec('composer dump-autoload -o');
        } else {
            $output->writeln("<error>Console command: $name already exists!</>");
        }
    }
}
