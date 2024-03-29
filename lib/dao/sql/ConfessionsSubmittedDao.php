<?php
namespace lib\dao\sql;
use lib\datamodel\sql\ConfessionsSubmitted;// Generated automatically by daogen.
// Do NOT edit this file.
// Any changes made to this file will be overwritten the next time it is generated.

class ConfessionsSubmittedDao {
	public static $ALLOWED_QUERY_OPERATORS = array('=', '<', '<=', '>', '>=', 'beginsWith', 'contains', 'endsWith');
	public static $ALLOWED_NUMERIC_QUERY_OPERATORS = array('=', '<', '<=', '>', '>=');
	public static $ALLOWED_STRING_QUERY_OPERATORS = array('=', '<', '<=', '>', '>=', 'beginsWith', 'contains', 'endsWith');
	protected $connection;

	public function __construct($connection) {
		$this->connection = $connection;
	}

	public function insert($ConfessionsSubmitted) {
		$ps = new PreparedStatement("insert into ConfessionsSubmitted (src_ip, author, title, body, timestamp) values (?, ?, ?, ?, ?)");
		$ps->setInt($ConfessionsSubmitted->src_ip);
		$ps->setString($ConfessionsSubmitted->author);
		$ps->setString($ConfessionsSubmitted->title);
		$ps->setString($ConfessionsSubmitted->body);
		$ps->setInt($ConfessionsSubmitted->timestamp);
		$this->connection->executeUpdate($ps);
		$ConfessionsSubmitted->id = $this->connection->getLastInsertId();
	}

	public function update($ConfessionsSubmitted) {
		$ps = new PreparedStatement("update ConfessionsSubmitted set src_ip = ?, author = ?, title = ?, body = ?, timestamp = ? where id = ?");
		$ps->setInt($ConfessionsSubmitted->src_ip);
		$ps->setString($ConfessionsSubmitted->author);
		$ps->setString($ConfessionsSubmitted->title);
		$ps->setString($ConfessionsSubmitted->body);
		$ps->setInt($ConfessionsSubmitted->timestamp);
		$ps->setInt($ConfessionsSubmitted->id);
		$this->connection->executeUpdate($ps);
	}

	public function delete($id) {
		$ps = new PreparedStatement("delete from ConfessionsSubmitted where id = ?");
		$ps->setInt($id);
		$this->connection->executeUpdate($ps);
	}

	public function load($id) {
		$ps = new PreparedStatement("select * from ConfessionsSubmitted where id = ?");
		$ps->setInt($id);
		$arr = $this->connection->fetchArray($this->connection->executeQuery($ps), true);
		if ($arr === false) return false;
		$ConfessionsSubmitted = new ConfessionsSubmitted();
		$ConfessionsSubmitted->loadFromArray($arr);
		return $ConfessionsSubmitted;
	}

	public function findByIdPS($id, $queryOperator = '=', $orderBy = null, $offset = 0, $limit = 0) {
		if (!in_array($queryOperator, ConfessionsSubmittedDao::$ALLOWED_NUMERIC_QUERY_OPERATORS)) $queryOperator = ConfessionsSubmittedDao::$ALLOWED_NUMERIC_QUERY_OPERATORS[0];
		$ps = new PreparedStatement("select * from ConfessionsSubmitted where id $queryOperator ?".((($orderBy!==null)&&($orderBy!='')) ? (' order by '.$orderBy) : ''), $offset, $limit);
		$ps->setInt($id);
		return $ps;
	}

	public function findById($id, $queryOperator = '=', $orderBy = null, $offset = 0, $limit = 0) {
		return $this->findWithPreparedStatement($this->findByIdPS($id, $queryOperator, $orderBy, $offset, $limit));
	}

	public function findBySrc_ipPS($src_ip, $queryOperator = '=', $orderBy = null, $offset = 0, $limit = 0) {
		if (!in_array($queryOperator, ConfessionsSubmittedDao::$ALLOWED_NUMERIC_QUERY_OPERATORS)) $queryOperator = ConfessionsSubmittedDao::$ALLOWED_NUMERIC_QUERY_OPERATORS[0];
		$ps = new PreparedStatement("select * from ConfessionsSubmitted where src_ip $queryOperator ?".((($orderBy!==null)&&($orderBy!='')) ? (' order by '.$orderBy) : ''), $offset, $limit);
		$ps->setInt($src_ip);
		return $ps;
	}

	public function findBySrc_ip($src_ip, $queryOperator = '=', $orderBy = null, $offset = 0, $limit = 0) {
		return $this->findWithPreparedStatement($this->findBySrc_ipPS($src_ip, $queryOperator, $orderBy, $offset, $limit));
	}

	public function findByAuthorPS($author, $queryOperator = '=', $orderBy = null, $offset = 0, $limit = 0) {
		if (!in_array($queryOperator, ConfessionsSubmittedDao::$ALLOWED_STRING_QUERY_OPERATORS)) $queryOperator = ConfessionsSubmittedDao::$ALLOWED_STRING_QUERY_OPERATORS[0];
		$sqlQueryOperator = (($queryOperator == 'beginsWith') || ($queryOperator == 'endsWith') || ($queryOperator == 'contains')) ? 'like' : $queryOperator;
		$ps = new PreparedStatement("select * from ConfessionsSubmitted where author $sqlQueryOperator ?".((($orderBy!==null)&&($orderBy!='')) ? (' order by '.$orderBy) : ''), $offset, $limit);
		if ($queryOperator == 'beginsWith') {
			$ps->setString($author.'%');
		} else if ($queryOperator == 'endsWith') {
			$ps->setString('%'.$author);
		} else if ($queryOperator == 'contains') {
			$ps->setString('%'.$author.'%');
		} else {
			$ps->setString($author);
		}
		return $ps;
	}

	public function findByAuthor($author, $queryOperator = '=', $orderBy = null, $offset = 0, $limit = 0) {
		return $this->findWithPreparedStatement($this->findByAuthorPS($author, $queryOperator, $orderBy, $offset, $limit));
	}

	public function findByTitlePS($title, $queryOperator = '=', $orderBy = null, $offset = 0, $limit = 0) {
		if (!in_array($queryOperator, ConfessionsSubmittedDao::$ALLOWED_STRING_QUERY_OPERATORS)) $queryOperator = ConfessionsSubmittedDao::$ALLOWED_STRING_QUERY_OPERATORS[0];
		$sqlQueryOperator = (($queryOperator == 'beginsWith') || ($queryOperator == 'endsWith') || ($queryOperator == 'contains')) ? 'like' : $queryOperator;
		$ps = new PreparedStatement("select * from ConfessionsSubmitted where title $sqlQueryOperator ?".((($orderBy!==null)&&($orderBy!='')) ? (' order by '.$orderBy) : ''), $offset, $limit);
		if ($queryOperator == 'beginsWith') {
			$ps->setString($title.'%');
		} else if ($queryOperator == 'endsWith') {
			$ps->setString('%'.$title);
		} else if ($queryOperator == 'contains') {
			$ps->setString('%'.$title.'%');
		} else {
			$ps->setString($title);
		}
		return $ps;
	}

	public function findByTitle($title, $queryOperator = '=', $orderBy = null, $offset = 0, $limit = 0) {
		return $this->findWithPreparedStatement($this->findByTitlePS($title, $queryOperator, $orderBy, $offset, $limit));
	}

	public function findByBodyPS($body, $queryOperator = '=', $orderBy = null, $offset = 0, $limit = 0) {
		if (!in_array($queryOperator, ConfessionsSubmittedDao::$ALLOWED_STRING_QUERY_OPERATORS)) $queryOperator = ConfessionsSubmittedDao::$ALLOWED_STRING_QUERY_OPERATORS[0];
		$sqlQueryOperator = (($queryOperator == 'beginsWith') || ($queryOperator == 'endsWith') || ($queryOperator == 'contains')) ? 'like' : $queryOperator;
		$ps = new PreparedStatement("select * from ConfessionsSubmitted where body $sqlQueryOperator ?".((($orderBy!==null)&&($orderBy!='')) ? (' order by '.$orderBy) : ''), $offset, $limit);
		if ($queryOperator == 'beginsWith') {
			$ps->setString($body.'%');
		} else if ($queryOperator == 'endsWith') {
			$ps->setString('%'.$body);
		} else if ($queryOperator == 'contains') {
			$ps->setString('%'.$body.'%');
		} else {
			$ps->setString($body);
		}
		return $ps;
	}

	public function findByBody($body, $queryOperator = '=', $orderBy = null, $offset = 0, $limit = 0) {
		return $this->findWithPreparedStatement($this->findByBodyPS($body, $queryOperator, $orderBy, $offset, $limit));
	}

	public function findByTimestampPS($timestamp, $queryOperator = '=', $orderBy = null, $offset = 0, $limit = 0) {
		if (!in_array($queryOperator, ConfessionsSubmittedDao::$ALLOWED_NUMERIC_QUERY_OPERATORS)) $queryOperator = ConfessionsSubmittedDao::$ALLOWED_NUMERIC_QUERY_OPERATORS[0];
		$ps = new PreparedStatement("select * from ConfessionsSubmitted where timestamp $queryOperator ?".((($orderBy!==null)&&($orderBy!='')) ? (' order by '.$orderBy) : ''), $offset, $limit);
		$ps->setInt($timestamp);
		return $ps;
	}

	public function findByTimestamp($timestamp, $queryOperator = '=', $orderBy = null, $offset = 0, $limit = 0) {
		return $this->findWithPreparedStatement($this->findByTimestampPS($timestamp, $queryOperator, $orderBy, $offset, $limit));
	}

	public function findAllPS($orderBy = null, $offset = 0, $limit = 0) {
		$ps = new PreparedStatement("select * from ConfessionsSubmitted".((($orderBy!==null)&&($orderBy!='')) ? (' order by '.$orderBy) : ''), $offset, $limit);
		return $ps;
	}

	public function findAll($orderBy = null, $offset = 0, $limit = 0) {
		return $this->findWithPreparedStatement($this->findAllPS($orderBy, $offset, $limit));
	}

	public function findWithPreparedStatement($ps) {
		return ConfessionsSubmittedDao::loadAllFromResultSet($this->connection, $this->connection->executeQuery($ps), true);
	}

	public static function loadAllFromResultSet($connection, $rs, $freeResultBeforeReturn = false) {
		$rows = array();
		while ($arr = $connection->fetchArray($rs)) {
			$ConfessionsSubmitted = new ConfessionsSubmitted();
			$ConfessionsSubmitted->loadFromArray($arr);
			$rows[] = $ConfessionsSubmitted;
		}
		if ($freeResultBeforeReturn) $connection->freeResult($rs);
		return $rows;
	}
}
