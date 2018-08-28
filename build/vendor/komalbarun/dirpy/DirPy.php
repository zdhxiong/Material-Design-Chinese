<?php 

declare(strict_types=1);

namespace Komalbarun;

class DirPy
{
	public function __construct()
	{
		$this->paths = [ 
			'dirs' => [], 
			'files' => [] ,
		];
	}

	/**
	 * Recursively scans directories.
	 * 
	 * @param  string $path         The path to the directory to 
	 *                              recursively scan. Defaults to current 
	 *                              directory.
	 *                              
	 * @param  array  $ignore_names Folder, filenames to ignore when scanning.
	 * 
	 * @return object               Object with array properties dirs and files.
	 */
	public function list_dir(string $path='./', array $ignore_names = [])
	{
		$ignore = ['.', '..', '.Ds_Store', '.@eaDir'];

		if(!empty($ignore_names))
		{
			$ignore = array_merge($ignore, $ignore_names);
		}

		foreach (scandir($path) as $value) 
		{
			if(!in_array($value, $ignore))
			{	
				$fpath = $path .DIRECTORY_SEPARATOR. $value;

				if(is_dir($fpath))
				{
					$this->paths['dirs'][] = $fpath;
					$this->list_dir($fpath);
				}
				else
				{
					$this->paths['files'][] = $fpath;
				}
			}
		}
	
		return (object)$this->paths;
	}
}