<?php
/* $Id$ */

/**
 * Translated by Xos� Calvo <xosecalvo at terra.es>
 */

$charset = 'iso-8859-1';
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d, %Y at %I:%M %p';


$strAccessDenied = 'Acceso Negado';
$strAction = 'Acci�n';
$strAddDeleteColumn = 'Adicionar/Eliminar columnas de campo';
$strAddDeleteRow = 'Adicionar/Eliminar filas de criterios';
$strAddNewField = 'Adicionar un novo campo';
$strAddPriv = 'Adicionar un novo privilexio';
$strAddPrivMessage = 'Privilexio adicionado.';
$strAddSearchConditions = 'Condici�n da pesquisa (ou sexa, o complemento da cl�usula "WHERE"):';
$strAddToIndex = 'Adicionar ao �ndice &nbsp;%s&nbsp;coluna(s)';
$strAddUser = 'Adicionar un novo usuario';
$strAddUserMessage = 'Usuario adicionado.';
$strAffectedRows = 'Filas que van ser afectadas:';
$strAfter = 'Despois de %s';
$strAfterInsertBack = 'Voltar';
$strAfterInsertNewInsert = 'Inserir un novo rexistro';
$strAll = 'Todos';
$strAllTableSameWidth = 'mostrar todas as tabelas co mesmo ancho?';
$strAlterOrderBy = 'Ordenar a tabela por';
$strAnalyzeTable = 'Analizar a tabela';
$strAnd = 'E';
$strAnIndex = 'Adicionouse un �ndice a %s';
$strAny = 'Calquer';
$strAnyColumn = 'Calquer columna';
$strAnyDatabase = 'Calquer banco de datos';
$strAnyHost = 'Calquer servidor';
$strAnyTable = 'Calquer tabela';
$strAnyUser = 'Calquer usuario';
$strAPrimaryKey = 'Adicionouse unha chave primaria a %s';
$strAscending = 'Ascendente';
$strAtBeginningOfTable = 'No comezo da tabela';
$strAtEndOfTable = 'Ao final da tabela';
$strAttr = 'Atributos';

$strBack = 'Voltar';
$strBinary = ' Binario ';
$strBinaryDoNotEdit= ' Binario - non editar ';
$strBookmarkDeleted = 'Eliminouse o marcador.';
$strBookmarkLabel = 'Nome';
$strBookmarkQuery = 'A procura de SQL foi gardada';
$strBookmarkThis = 'Gardar esta procura de SQL';
$strBookmarkView = 'S� visualizar';
$strBrowse = 'Visualizar';
$strBzip = 'comprimido no formato "bzipped"';

$strCantLoadMySQL = 'Non foi posible carregar a extensi�n do MySQL;<br>comprobe, por favor, a configuraci�n do PHP.';
$strCantLoadRecodeIconv = 'Non se puido carregar iconv ou prec�sase da extensi�n recode para a conversi�n do charset. Configure o php para que se poidan usar estas extensi�ns ou indique que non se use a conversi�n de charset en phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Non se pode facer que este �ndice sexa PRIMARIO!';
$strCantUseRecodeIconv = 'Non se puido usar nen iconv nen libiconv nen a funci�n recode_stringf mentres haxa extensi�ns por carregar. Comprobe a s�a configuraci�n do php.';
$strCardinality = 'Cardinalidade';
$strCarriage = 'Car�cter de retorno: \\r';
$strChange = 'Mudar';
$strChangeDisplay = 'Escolla o campo que se h� de mostrar';
$strChangePassword = 'Trocar o contrasinal';
$strCharsetOfFile = 'Conxunto de caracteres do ficheiro:';
$strCheckAll = 'Marc�-los todos';
$strCheckDbPriv = 'Verificar os privilexios do banco de datos';
$strCheckTable = 'Verificar a tabela';
$strChoosePage = 'Escolla unha p�xina para modificar';
$strColComFeat = 'Mostrando os comentarios das columnas';
$strColumn = 'Columna';
$strColumnNames = 'Nomes das Columnas';
$strComments = 'Comentarios';
$strCompleteInserts = 'Inserci�ns completas';
$strConfigFileError = 'phpMyAdmin non puido ler o seu ficheiro de configuraci�n<br/>Isto poder�a deberse a que php atopou un erro nel ou a que php non puido atopar o ficheiro.<br/>Invoque o ficheiro de configuraci�n directamente mediante o v�nculo que hai m�is abaixo e lea a mensaxe de erro de php que receba. Na maior�a dos casos simplesmente faltan unha aspa ou un ponto e v�rcula <br/>Se recebe unha p�xina en branco � que todo est� ben.';
$strConfigureTableCoord = 'Configure as coordenadas da tabela %s';
$strConfirm = 'Est� seguro/a?';
$strCookiesRequired = 'A partir de aqui debe permitir cookies.';
$strCopyTable = 'Copiar a tabela a (base_de_datos<b>.</b>tabela):';
$strCopyTableOK = 'Tabela \$table copiada para \$new_name.';
$strCreate = 'Crear';
$strCreateIndex = 'Crear un �ndice en&nbsp;%s&nbsp;colunas';
$strCreateIndexTopic = 'Crear un novo �ndice';
$strCreateNewDatabase = 'Crear un novo banco de datos';
$strCreateNewTable = 'Crear unha tabela nova na base de datos %s';
$strCreatePage = 'Crear unha p�xina nova';
$strCreatePdfFeat = 'Creaci�n de PDFs';
$strCriteria = 'Criterio';

$strData = 'Datos';
$strDatabase = 'Banco de Datos ';
$strDatabaseHasBeenDropped = 'A base de datos %s foi eliminada.';
$strDatabases = 'Bancos de Datos';
$strDatabasesStats = 'Estat�sticas dos bancos de datos';
$strDatabaseWildcard = 'Base de datos (perm�tese usar os comod�ns):';
$strDataOnly = 'S� os datos';
$strDefault = 'Padr�n';
$strDelete = 'Eliminar';
$strDeleted = 'Rexistro eliminado';
$strDeletedRows = 'Filas borradas:';
$strDeleteFailed = 'Non foi posible eliminar!';
$strDeleteUserMessage = 'Acaba de eliminar o usuario %s.';
$strDescending = 'Descendente';
$strDisabled = 'Desactivado';
$strDisplay = 'Mostrar';
$strDisplayFeat = 'Mostrar as caracter�sticas';
$strDisplayOrder = 'Mostrar en orde:';
$strDisplayPDF = 'Mostrar o esquema PDF';
$strDoAQuery = 'Faga unha "procura por exemplo" (o comod�n � "%")';
$strDocu = 'Documentaci�n';
$strDoYouReally = 'Seguro? ';
$strDrop = 'Eliminar';
$strDropDB = 'Elimina o banco de datos %s';
$strDropTable = 'Eliminar a tabela';
$strDumpingData = 'Extraindo datos da tabela';
$strDumpXRows = 'P�r %s filas a partir da fila %s.';
$strDynamic = 'din�mico';

$strEdit = 'Modificar';
$strEditPDFPages = 'Editar as p�xinas PDF';
$strEditPrivileges = 'Modificar privilexios';
$strEffective = 'Efectivo';
$strEmpty = 'Borrar';
$strEmptyResultSet = 'MySQL retornou um conxunto vac�o (ex. cero rexistros).';
$strEnabled = 'Activado';
$strEnd = 'Fin';
$strEnglishPrivileges = ' Nota: os nomes de privilexios do MySQL est�n en ingl�s';
$strError = 'Erro';
$strExplain = 'Explicar SQL';
$strExport = 'Exportar';
$strExportToXML = 'Exportar no formato XML';
$strExtendedInserts = 'Inserci�ns extendidas';
$strExtra = 'Extra';

$strField = 'Campo';
$strFieldHasBeenDropped = 'Eliminouse o campo %s';
$strFields = 'Campos';
$strFieldsEmpty = ' O reconto de campos di que non hai neng�n! ';
$strFieldsEnclosedBy = 'Os campos delim�tanse con';
$strFieldsEscapedBy = 'Os campos esc�panse con';
$strFieldsTerminatedBy = 'Os campos rematan por';
$strFixed = 'fixo';
$strFlushTable = 'Fechar a tabela ("FLUSH")';
$strFormat = 'Formato';
$strFormEmpty = 'Falta un valor no formulario!';
$strFullText = 'Textos completos';
$strFunction = 'Funci�ns';

$strGenBy = 'Xerado por';
$strGeneralRelationFeat = 'Caracter�sticas xerais das relaci�ns';
$strGenTime = 'Xerado en';
$strGo = 'Executar';
$strGrants = 'Conceder';
$strGzip = 'comprimido no formato "gzipped"';

$strHasBeenAltered = 'foi alterado.';
$strHasBeenCreated = 'foi creado.';
$strHaveToShow = 'Ten que escoller polo menos unha columna para mostrar';
$strHome = 'Comezo ("Home")';
$strHomepageOfficial = 'P�xina Oficial do phpMyAdmin';
$strHomepageSourceforge = 'P�xina do phpMyAdmin en Sourceforge';
$strHost = 'Servidor';
$strHostEmpty = 'O nome do servidor est� vac�o!';

$strIdxFulltext = 'Texto completo';
$strIfYouWish = 'Para carregar s� algunhas columnas da tabela, faga unha lista separada por v�rgulas.';
$strIgnore = 'Ignorar';
$strIndex = '�ndice';
$strIndexHasBeenDropped = 'Eliminouse o �ndice %s';
$strIndexName = 'Nome do �ndice&nbsp;:';
$strIndexType = 'Tipo de �ndice&nbsp;:';
$strIndexes = '�ndices';
$strInsert = 'Inserir';
$strInsertAsNewRow = 'Inserir unha nova columna';
$strInsertedRows = 'Filas inseridas:';
$strInsertNewRow = 'Inserir un novo rexistro';
$strInsertTextfiles = 'Inserir un arquivo de texto na tabela';
$strInstructions = 'Instrucci�ns';
$strInUse = 'en uso';
$strInvalidName = '"%s" i unha palabra reservada. Non se pode utilizar como nome dun banco de datos, dunha tabela ou dun campo.';

$strKeepPass = 'Non mude o contrasinal';
$strKeyname = 'Nome chave';
$strKill = 'Matar (kill)';

$strLength = 'Tama�o';
$strLengthSet = 'Tama�o/Definir*';
$strLimitNumRows = 'N�mero de rexistros por p�xina';
$strLineFeed = 'Car�cter de alimentaci�n de li�a: \\n';
$strLines = 'Li�as';
$strLinesTerminatedBy = 'As li�as rematan por';
$strLinkNotFound = 'Non se atopou o v�nculo';
$strLinksTo = 'Vinc�lase con';
$strLocationTextfile = 'Localizaci�n do arquivo de texto';
$strLogin = 'Entrada (login)';
$strLogout = 'Sair';
$strLogPassword = 'Contrasinal:';
$strLogUsername = 'Nome de usuario:';

$strMissingBracket = 'Falta un par�ntese';
$strModifications = 'As modificaci�ns foron gardadas';
$strModify = 'Modificar';
$strModifyIndexTopic = 'Modificar un �ndice';
$strMoveTable = 'Mover a tabela a (base_de_datos<b>.</b>tabela):';
$strMoveTableOK = 'Moveuse a tabela %s para %s.';
$strMySQLCharset = 'C�digo de caracteres (Charset) MySQL';
$strMySQLReloaded = 'MySQL reiniciado.';
$strMySQLSaid = 'Mensaxes do MySQL: ';
$strMySQLShowProcess = 'Mostrar os procesos';
$strMySQLShowStatus = 'Mostrar informaci�n de tempo de execuci�n do MySQL';
$strMySQLShowVars = 'Mostrar as variables de sistema do MySQL';

$strName = 'Nome';
$strNext = 'Seguinte';
$strNo = 'Non';
$strNoDatabases = 'Non hai neng�n banco de datos';
$strNoDescription = 'sen descrici�n';
$strNoDropDatabases = 'Os comandos "Eliminar banco de datos" non est�n permitidos.';
$strNoExplain = 'Saltar a explicacion de SQL';
$strNoFrames = 'phpMyAdmin usa-se mellor cun navegador que <b>acepte molduras</b>.';
$strNoIndex = 'Non se definiu un �ndice';
$strNoIndexPartsDefined = 'Non se definiron partes do �ndice';
$strNoModification = 'Sen cambios';
$strNone = 'Nengun';
$strNoPassword = 'Sen Contrasinal';
$strNoPhp = 'sen c�digo PHP';
$strNoPrivileges = 'Sen Privilexios';
$strNoQuery = 'Non hai procura SQL!';
$strNoRights = 'Non ten direitos suficientes para estar aqu� agora!';
$strNoTablesFound = 'Non se achou nengunha tabela no banco de datos';
$strNotOK = 'non conforme';
$strNotSet = 'Non se atopou a tabela <b>%s</b>ou non se indicou en %s';
$strNotNumber = 'Non � un n�mero!';
$strNotValidNumber = ' non � un n�mero v�lido para unha fila!';
$strNoUsersFound = 'Non se achou nengun(s) usuario(s).';
$strNoValidateSQL = 'Saltarse a validacion de';
$strNull = 'Nulo';
$strNumSearchResultsInTable = '%s ocorrencias(s) dentro da tabela <i>%s</i>';
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> ocorrencia(s)';

$strOftenQuotation = 'Xeralmente son aspas. OPCIONAL significa que s� os campos de caracteres son delimitados por caracteres "delimitadores"';
$strOK = 'Conforme';
$strOperations = 'Operaci�ns';
$strOptimizeTable = 'Optimizar a tabela';
$strOptionalControls = 'Opcional. Controla como se han de ler e escreber os caracteres especiais.';
$strOptionally = 'OPCIONAL';
$strOptions = 'Opci�ns';
$strOr = 'ou';
$strOverhead = 'De m�is (Overhead)';

$strPageNumber = 'N�mero de p�xina:';
$strPartialText = 'Textos parciais';
$strPassword = 'Contrasinal';
$strPasswordEmpty = 'O contrasinal est� vac�o!';
$strPasswordNotSame = 'Os contrasinais non son os mesmos!';
$strPdfDbSchema = 'Esquema da base de datos "%s" - P�xina %s';
$strPdfInvalidPageNum = 'O n�mero de p�xina PDF non est� definido';
$strPdfInvalidTblName = 'Non existe a tabela "%s".';
$strPdfNoTables = 'Sen tabelas';
$strPhp = 'Crear c�digo PHP';
$strPHPVersion = 'Versi�n do PHP';
$strPmaDocumentation = 'Documentaci�n do phpMyAdmin';
$strPmaUriError = 'A directiva <tt>$cfg[\'PmaAbsoluteUri\']</tt> DEBE estar asignada no seu ficheiro de configuraci�n.';
$strPos1 = 'Inicio';
$strPrevious = 'Anterior';
$strPrimary = 'Primaria';
$strPrimaryKey = 'Chave primaria';
$strPrimaryKeyHasBeenDropped = 'Eliminouse a chave primaria';
$strPrimaryKeyName = 'O nome da chave primaria debe ser... PRIMARIA';
$strPrimaryKeyWarning = '("PRIMARIA" <b>debe</b> ser o nome de e <b>s� de</b> unha chave primaria)';
$strPrintView = 'Visualizaci�n previa da impresi�n';
$strPrivileges = 'Privilexios';
$strProperties = 'Propiedades';

$strQBE = 'Procurar pondo un exemplo ("QBE")';
$strQBEDel = 'Eliminar';
$strQBEIns = 'Inserir';
$strQueryOnDb = 'Procura tipo SQL no banco de datos <b>%s</b>:';

$strRecords = 'Rexistros';
$strReferentialIntegrity = 'Comprobar a integridade das referencias:';
$strRelationNotWorking = 'Desactivouse a funcionalidade adicional para o traballo con tabelas vinculadas. Para saber o por que, faga click%saqu&iacute;%s.';
$strRelationView = 'Vista das relaci�ns';
$strReloadFailed = 'A reinicializaci�n do MySQL fallou.';
$strReloadMySQL = 'Reinicializar o MySQL';
$strRememberReload = 'Lembre-se recarregar o servidor.';
$strRenameTable = 'Renomear a tabela para';
$strRenameTableOK = 'Tabela \$table renomeada para \$new_name';
$strRepairTable = 'Reparar a tabela';
$strReplace = 'Substituir';
$strReplaceTable = 'Substituir os datos da tabela polos do ficheiro';
$strReset = 'Reiniciar';
$strReType = 'Reescreber';
$strRevoke = 'Revogar';
$strRevokeGrant = 'Revogar privilexio de conceder';
$strRevokeGrantMessage = 'Retirou-lle o privilexio de Permitir a %s';
$strRevokeMessage = 'Retirou-lle os privilexios a %s';
$strRevokePriv = 'Revogar privilexios';
$strRowLength = 'Lonxitude da fila';
$strRows = 'Filas';
$strRowsFrom = 'filas, a comezar da';
$strRowSize= ' Tama�o da fila ';
$strRowsModeVertical= 'vertical';
$strRowsModeHorizontal= 'horizontal';
$strRowsModeOptions= 'en modo %s e repetir os cabezallos de cada %s celas';
$strRowsStatistic = 'Estatist�cas da Fila';
$strRunning = 'a rodar no servidor %s';
$strMySQLServerProcess = 'MySQL %pma_s1% a rodar no servidor %pma_s2% como %pma_s3%';
$strRunQuery = 'Enviar esta procura';
$strRunSQLQuery = 'Efectuar unha procura SQL na base de datos %s';

$strSave = 'Gardar';
$strScaleFactorSmall = 'O factor de reducci�n � demasiado pequeno para que o esquema caiba nunha �nica p�xina';
$strSearch = 'Procurar';
$strSearchFormTitle = 'Procurar na base de datos';
$strSearchInTables = 'Dentro da(s) tabela(s):';
$strSearchNeedle = 'Palabras(s) ou valore(s) a procurar (o comod�n �: "%"):';
$strSearchOption1 = 'polo menos unha das palabras';
$strSearchOption2 = 'todas as palabras';
$strSearchOption3 = 'a frase exacta';
$strSearchOption4 = 'como expresi�n regular';
$strSearchResultsFor = 'Procurar os resultados para "<i>%s</i>" %s:';
$strSearchType = 'Atopar:';
$strSelect = 'Procurar';
$strSelectADb = 'Seleccione unha base de dados';
$strSelectAll = 'Seleccionar todo';
$strSelectFields = 'Seleccione os campos (m�nimo 1)';
$strSelectNumRows = 'a procurar';
$strSelectTables = 'Seleccionar tabelas';
$strSend = 'Enviar <I>(gravar nun ficheiro)</I><br>';
$strServerChoice = 'Escolla de Servidor';
$strServerVersion = 'Versi�n do servidor';
$strSetEnumVal = 'Se o tipo de campo � "enum" ou "set", introduza os valores usando este formato: \'a\',\'b\',\'c\'...<br />Se precisar p�r unha barra invertida (" \ ") ou aspas simples (" \' ") entre estes valores, preceda a barra e as aspas de barras invertidas (por exemplo \'\\\\xyz\' ou \'a\\\'b\').';
$strShow = 'Mostrar';
$strShowAll = 'Ver todos os rexistros';
$strShowCols = 'Mostrar as columnas';
$strShowColor = 'Mostrar a cor';
$strShowGrid = 'Mostrar a grella';
$strShowingRecords = 'Mostrando rexistros ';
$strShowPHPInfo = 'Mostrar informaci�n sobre o PHP';
$strShowTableDimension = 'Mostrar a dimensi�n das tabelas';
$strShowTables = 'Mostrar as tabelas';
$strShowThisQuery = ' Mostrar esta procura aqu� outra vez ';
$strSingly = 'a refacer logo de inserci�ns e destruci�ns (shingly)';
$strSize = 'Tama�o';
$strSort = 'Ordenar';
$strSpaceUsage = 'Uso do espazo';
$strSplitWordsWithSpace = 'As palabras div�dense cun car�cter de espazo (" ").';
$strSQL = 'SQL';
$strSQLQuery = 'comando SQL';
$strSQLResult = 'Resultado SQL';
$strStatement = 'Informaci�ns';
$strStrucCSV = 'Datos CSV';
$strStrucData = 'Estructura e datos';
$strStrucDrop = 'Adicionar \'Eliminar tabela anterior se existe\'';
$strStrucExcelCSV = 'CSV (para datos de Ms Excel)';
$strStrucOnly = 'S� a estructura';
$strStructPropose = 'Propor unha estructura para a tabela';
$strStructure = 'Estructura';
$strSubmit = 'Submeter';
$strSuccess = 'O seu comando de SQL executou-se com �xito';
$strSum = 'Suma';

$strTable = 'tabela ';
$strTableComments = 'Comentarios da tabela';
$strTableEmpty = 'O nome da tabela est� vac�o!';
$strTableHasBeenDropped = 'Eliminouse a tabela %s';
$strTableHasBeenEmptied = 'Vaciouse a tabela %s';
$strTableHasBeenFlushed = 'Fechouse a tabela %s';
$strTableMaintenance = 'Tabela de manutenci�n';
$strTables = '%s tabela(s)';
$strTableStructure = 'Estructura da tabela';
$strTableType = 'Tipo da tabela';
$strTextAreaLength = ' Por causa da sua lonxitude,<br> este campo pode non ser editable ';
$strTheContent = 'O conte�do do seu arquivo foi inserido';
$strTheContents = 'O conte�do do arquivo substitu�u o conte�do da tabela que ti�a a mesma chave primaria ou �nica';
$strTheTerminator = 'O car�cter que separa os campos.';
$strTotal = 'total';
$strType = 'Tipo';

$strUncheckAll = 'Quitar-lles as marcas a todos';
$strUnique = '�nico';
$strUnselectAll = 'Non seleccionar nada';
$strUpdatePrivMessage = 'Acaba de actualizar os privilexios de %s.';
$strUpdateProfile = 'Actualizar o perfil:';
$strUpdateProfileMessage = 'Actualizouse o perfil.';
$strUpdateQuery = 'Actualizar a procura';
$strUsage = 'Uso';
$strUseBackquotes = 'Protexer os nomes das tabelas e dos campos con&nbsp;" ` "';
$strUser = 'Usuario';
$strUserEmpty = 'O nome do usuario est� vac�o!';
$strUserName = 'Nome do usuario';
$strUsers = 'Usuarios';
$strUseTables = 'Usar as tabelas';

$strValidateSQL = 'Validar SQL';
$strValue = 'Valor';
$strViewDump = 'Ver o esquema do volcado da tabela';
$strViewDumpDB = 'Ver o esquema do volcado do banco de datos';

$strWelcome = 'Benvida/o a %s';
$strWithChecked = 'Todos os marcados';
$strWrongUser = 'Usuario ou contrasinal errado. Acceso negado.';

$strYes = 'Si';

$strZip = 'comprimido no formato "zipped"';

// To translate
$strBeginCut = 'BEGIN CUT';  //to translate
$strEndCut = 'END CUT';  //to translate
$strSQPBugInvalidIdentifer = 'Invalid Identifer';  //to translate
$strSQPBugUnknownPunctuation = 'Unknown Punctuation String';  //to translate
$strSQPBugUnclosedQuote = 'Unclosed quote';  //to translate
$strBeginRaw = 'BEGIN RAW';  //to translate
$strEndRaw = 'END RAW';  //to translate
$strSQLParserUserError = 'There seems to be an error in your SQL query. The MySQL server error output below, if there is any, may also help you in diagnosing the problem';  //to translate
$strSQLParserBugMessage = 'There is a chance that you may have found a bug in the SQL parser. Please examine your query closely, and check that the quotes are correct and not mis-matched. Other possible failure causes may be that you are uploading a file with binary outside of a quoted text area. You can also try your query on the MySQL command line interface. The MySQL server error output below, if there is any, may also help you in diagnosing the problem. If you still have problems or if the parser fails where the command line interface succeeds, please reduce your SQL query input to the single query that causes problems, and submit a bug report with the data chunk in the CUT section below:';  //to translate
?>
