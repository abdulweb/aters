<?php
namespace App\Services\PollingUnit\DangeShuni;
	
	class Dange
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'S/BAURA NIZZAMIYA/KANWURI',
				'BUIDE BAKIN TITI/PRIMARY SCHOOL KANWURI (BAKIN TITI) (BUIDE BAKIN TITI)',
				'ADARAWA/GINDIN ITACEN LIM OPP. GIDAN ABDULLAHI MAI BUHU (ADARAWA)',
				'BAKIN KASUWA',
				'PRIMARY SCHOOL MALLAMAWA (GARKAR NABOKOMALLAMAWA)',
				'TAKALMAWA,BAKIN FANFO',
				'TAKALMAWA 2/MODEL PRIMARY SCHOOL BAKIN KASUWA (TAKALMAWA)',
				'PRY SCH, KINDIRU',
				'PRY SCH, HAUSAWA',
				'FILIN BALILA TUSHEN LIM (HAUSAGARKAN HAKIMI)',
				'MODEL PRY SCH, DANKILO',
				'MODEL PRY SCH, GIDAN AJIYA',
				'MODEL PRY SCH, RUNJI',
				'BANGON GIDAN MALAM CHIKA TUKANAWA (GARKAR MALAM MAIDAMA)',
				'DARKANA/TUSHEN ITACEN LIM KUSA DA KOFA ALH. ALTINE (GARKAR NAGAKE DAKARNA)',
				'DAFILIN KAURARE MASALLACI',
				'BAKIN KASUWA‐BUIDE'
				
			];
		}
	}