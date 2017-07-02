<?php

namespace App\Markdown;

use Illuminate\Support\Facades\Facade;

class MarkdownFacade extends Facade
{
	/**
	 * {@inheritdoc}
	 */
	protected static function getFacadeAccessor()
	{
		return 'markdown';
	}
}
