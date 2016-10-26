<?php

	/**
	 * @package Ecash.Models
	 */
	class ECash_Models_SreportStatusHistory extends ECash_Models_WritableModel
	{
		public function getColumns()
		{
			static $columns = array(
				'date_created','sreport_status_history_id','sreport_id','sreport_status_id','agent_id'
			);
			return $columns;
		}
		public function getPrimaryKey()
		{
			return array('sreport_status_history_id');
		}
		public function getAutoIncrement()
		{
			return 'sreport_status_history_id';
		}
		public function getTableName()
		{
			return 'sreport_status_history';
		}
	}
?>
