<?php
include_once 'class.common.user.php';


/*All the common Model classes are listed here*/
class PermissionXML{
    var $id;  // id of permission
    var $name;    // name of permission
    var $category;  // category of permission
    
    //map the tag, value pair with the members serially
    //used in xml to permission mapping
    public function __construct($row) {

        //todo: check for the exception situation

        foreach ($row as $k=>$v)
            $this->$k = $row[$k];

    }

}

class MenuXML{
    private $_ParentTitle;
    public $_Child;
    private $_Title;
    private $_Permissions;
    private $_Link;
    private $_Visible=0; // by default every menu is in visible

    public function getTitle(){
        return $this->_Title;
    }

    public function setTitle($Title){
        $this->_Title = $Title;
    }


    public function getParentTitle(){
        return $this->_ParentTitle;
    }

    public function setParentTitle($ParentTitle){
        $this->_ParentTitle = $ParentTitle; 
    }

    public function getPermissions(){
        return $this->_Permissions;
    }

    public function setPermissions($Permissions){
        $this->_Permissions = $Permissions;
    }

    public function getLink(){
        return $this->_Link;
    }

    public function setLink($Link){
        $this->_Link = $Link;
    }

    public function setVisible($Visible){
        $this->_Visible = $Visible;
    }

    public function isVisible(){

        return $this->_Visible;
    }

}


class Result{

    private $_IsSuccess=0;
    private $_ResultObject;

    public function setIsSuccess($IsSuccess){
        $this->_IsSuccess = $IsSuccess;
    }

    public function getIsSuccess(){

        return $this->_IsSuccess;
    }

    public function setResultObject($ResultObject){
        $this->_ResultObject = $ResultObject;
    }

    public function getResultObject(){

        return $this->_ResultObject;
    }

}



class PermissionUtil{


    public static $DISCUSSION_C='DISCUSSION_C';
    public static $DISCUSSION_R='DISCUSSION_R';
    public static $DISCUSSION_U='DISCUSSION_U';
    public static $DISCUSSION_D='DISCUSSION_D';

    public static $DISCUSSION_CAT_C='DISCUSSION_CAT_C';
    public static $DISCUSSION_CAT_R='DISCUSSION_CAT_R';
    public static $DISCUSSION_CAT_U='DISCUSSION_CAT_U';
    public static $DISCUSSION_CAT_D='DISCUSSION_CAT_D';

    public static $DISCUSSION_COMMENT_C='DISCUSSION_COMMENT_C';
    public static $DISCUSSION_COMMENT_R='DISCUSSION_COMMENT_R';
    public static $DISCUSSION_COMMENT_U='DISCUSSION_COMMENT_U';
    public static $DISCUSSION_COMMENT_D='DISCUSSION_COMMENT_D';


    public static $HALL_C='HALL_C';
    public static $HALL_R='HALL_R';
    public static $HALL_U='HALL_U';
    public static $HALL_D='HALL_D';


    public static $POSITION_C='POSITION_C';
    public static $POSITION_R='POSITION_R';
    public static $POSITION_U='POSITION_U';
    public static $POSITION_D='POSITION_D';

    public static $ROLE_C='ROLE_C';
    public static $ROLE_R='ROLE_R';
    public static $ROLE_U='ROLE_U';
    public static $ROLE_D='ROLE_D';

    public static $SCHOOL_C='SCHOOL_C';
    public static $SCHOOL_R='SCHOOL_R';
    public static $SCHOOL_U='SCHOOL_U';
    public static $SCHOOL_D='SCHOOL_D';


    public static $USER_C='USER_C';
    public static $USER_R='USER_R';
    public static $USER_U='USER_U';
    public static $USER_D='USER_D';

    public static $DISCIPLINE_C='DISCIPLINE_C';
    public static $DISCIPLINE_R='DISCIPLINE_R';
    public static $DISCIPLINE_U='DISCIPLINE_U';
    public static $DISCIPLINE_D='DISCIPLINE_D';
   
    public static $PERMISSION_C='PERMISSION_C';
    public static $PERMISSION_R='PERMISSION_R';
    public static $PERMISSION_U='PERMISSION_U';
    public static $PERMISSION_D='PERMISSION_D';

       //Permission for housing
    public static $HOUSING_C='HOUSING_C';
    public static $HOUSING_R='HOUSING_R';
    public static $HOUSING_U='HOUSING_U';
    public static $HOUSING_D='HOUSING_D';

    public static $HOUSING_TYPE_C='HOUSING_TYPE_C';
    public static $HOUSING_TYPE_R='HOUSING_TYPE_R';
    public static $HOUSING_TYPE_U='HOUSING_TYPE_U';
    public static $HOUSING_TYPE_D='HOUSING_TYPE_D';

    public static $HOUSING_ROOM_C='HOUSING_ROOM_C';
    public static $HOUSING_ROOM_R='HOUSING_ROOM_R';
    public static $HOUSING_ROOM_U='HOUSING_ROOM_U';
    public static $HOUSING_ROOM_D='HOUSING_ROOM_D';

    public static $HOUSING_DETAILS_C='HOUSING_DETAILS_C';
    public static $HOUSING_DETAILS_R='HOUSING_DETAILS_R';
    public static $HOUSING_DETAILS_U='HOUSING_DETAILS_U';
    public static $HOUSING_DETAILS_D='HOUSING_DETAILS_D';

    public static $HOUSING_ROOM_ASSIGN_C='HOUSING_ROOM_ASSIGN_C';
    public static $HOUSING_ROOM_ASSIGN_R='HOUSING_ROOM_ASSIGN_R';
    public static $HOUSING_ROOM_ASSIGN_U='HOUSING_ROOM_ASSIGN_U';
    public static $HOUSING_ROOM_ASSIGN_D='HOUSING_ROOM_ASSIGN_D';

    public static $HOUSING_SEARCH_C='HOUSING_SEARCH_C';
    public static $HOUSING_SEARCH_R='HOUSING_SEARCH_R';
    public static $HOUSING_SEARCH_U='HOUSING_SEARCH_U';
    public static $HOUSING_SEARCH_D='HOUSING_SEARCH_D';

    public static $HOUSING_APPLICATION_C = 'HOUSING_APPLICATION_C';
    public static $HOUSING_APPLICATION_R = 'HOUSING_APPLICATION_R';
    public static $HOUSING_APPLICATION_U = 'HOUSING_APPLICATION_U';
    public static $HOUSING_APPLICATION_D = 'HOUSING_APPLICATION_D';

    public static $HOUSING_APPLICATION_MANAGE_C = 'HOUSING_APPLICATION_MANAGE_C';
    public static $HOUSING_APPLICATION_MANAGE_R = 'HOUSING_APPLICATION_MANAGE_R';
    public static $HOUSING_APPLICATION_MANAGE_U = 'HOUSING_APPLICATION_MANAGE_U';
    public static $HOUSING_APPLICATION_MANAGE_D = 'HOUSING_APPLICATION_MANAGE_D';

    public static $APPLICATION_TEMPLATE_C = 'APPLICATION_TEMPLATE_C';
    public static $APPLICATION_TEMPLATE_R = 'APPLICATION_TEMPLATE_R';
    public static $APPLICATION_TEMPLATE_U = 'APPLICATION_TEMPLATE_U';
    public static $APPLICATION_TEMPLATE_D = 'APPLICATION_TEMPLATE_D';

    public static $APPLICATION_FORMAT_C = 'APPLICATION_FORMAT_C';
    public static $APPLICATION_FORMAT_R = 'APPLICATION_FORMAT_R';
    public static $APPLICATION_FORMAT_U = 'APPLICATION_FORMAT_U';
    public static $APPLICATION_FORMAT_D = 'APPLICATION_FORMAT_D';
}

class PageUtil{

    public static $DISCUSSION_CAT='discussion_category.php';
    public static $DISCUSSION='discussion.php';
    public static $DISCUSSION_COMMENT='discussion_comment.php';
    public static $DISCUSSION_SEARCH='discussion_search.php';
    public static $DISCUSSION_ANSWERED='discussion_answered.php';
    public static $DISCUSSION_UNANSWERED='discussion_unanswered.php';
    public static $DISCUSSION_LIST='discussion_list.php';
    public static $DISCUSSION_RECENT='discussion_recent.php';

    public static $HALL='hall.php';

    public static $ERROR='error.php';
    public static $HOME='home.php'; 
    public static $LOGIN='login.php';

    
    public static $PERMISSION='permission.php';
    public static $ROLE='role.php';
  
    public static $DISCIPLINE='discipline.php';
    public static $SCHOOL='school.php';
    public static $POSITION='position.php';

    public static $HOUSING_TYPE='housing_type.php';
    public static $HOUSING='housing.php';
    public static $HOUSING_ROOM='housing_room.php';
    public static $HOUSING_DETAIL='housing_details.php';
    public static $HOUSING_ROOM_ASSIGN='housing_room_assign.php';
    public static $HOUSING_SEARCH='housing_search.php';
    public static $HOUSING_APPLICATION = 'housing_application.php';
    public static $HOUSING_APPLICATION_MANAGE = 'housing_application_manage.php';
    public static $APPLICATION_TEMPLATE = 'application_template.php';
    public static $APPLICATION_FORMAT = 'application_format.php';

    public static $USER='user.php';
    public static $USER_NEW='user_new.php';
    public static $USER_DETAILS='user_details.php';
    public static $USER_SEARCH='user_search.php';
    public static $USER_FORGOT_PASSWORD='forgot_password.php';
}

class RouteUtil{

    private static $s_Routes; //The single instance
    private static $s_instance; //The single instance


   private function __construct(){
        
         self::$s_Routes = array();

        //add new page and routing address here always

         self::$s_Routes[PageUtil::$DISCUSSION_CAT]  =  "modules/forum/ui/view.discussionCategory.php";
         self::$s_Routes[PageUtil::$DISCUSSION]      =  "modules/forum/ui/view.discussion.php";
         self::$s_Routes[PageUtil::$DISCUSSION_COMMENT] = "modules/forum/ui/view.comment.php";
         self::$s_Routes[PageUtil::$DISCUSSION_LIST]   = "modules/forum/ui/view.discussionList.php";
         self::$s_Routes[PageUtil::$DISCUSSION_SEARCH]   = "modules/forum/ui/view.searchDiscussion.php";
         self::$s_Routes[PageUtil::$DISCUSSION_RECENT]  = "modules/forum/ui/view.mostRecent.php";
         self::$s_Routes[PageUtil::$DISCUSSION_ANSWERED]  = "modules/forum/ui/view.answered.php";
         self::$s_Routes[PageUtil::$DISCUSSION_UNANSWERED]  = "modules/forum/ui/view.unanswered.php";


         self::$s_Routes[PageUtil::$HALL]  = "modules/hall/ui/view.hall.php";

         self::$s_Routes[PageUtil::$HOME]             =   "modules/dashboard/ui/view.home.php";
         self::$s_Routes[PageUtil::$LOGIN]            =   "modules/dashboard/ui/view.login.php";

         self::$s_Routes[PageUtil::$ROLE]   =   "modules/user/ui/view.role.php";
         self::$s_Routes[PageUtil::$DISCIPLINE]       =   "modules/user/ui/view.discipline.php";  
         self::$s_Routes[PageUtil::$PERMISSION]       =   "modules/user/ui/view.permission.php";
         self::$s_Routes[PageUtil::$POSITION]         =   "modules/user/ui/view.position.php";
         self::$s_Routes[PageUtil::$SCHOOL]           =   "modules/user/ui/view.school.php";

         self::$s_Routes[PageUtil::$USER] =   "modules/user/ui/view.user.php";
         self::$s_Routes[PageUtil::$USER_DETAILS] =   "modules/user/ui/view.user_details.php";
         self::$s_Routes[PageUtil::$USER_NEW] =   "modules/user/ui/view.user_new.php";
         self::$s_Routes[PageUtil::$USER_SEARCH] =   "modules/user/ui/view.user_search.php";
         self::$s_Routes[PageUtil::$USER_FORGOT_PASSWORD] =   "modules/user/ui/view.forgot_password.php";

         //Housing Routes
         self::$s_Routes[PageUtil::$HOUSING_TYPE]  = "/modules/housing/ui/view.housingType.php";
         self::$s_Routes[PageUtil::$HOUSING]  = "/modules/housing/ui/view.housing.php";
         self::$s_Routes[PageUtil::$HOUSING_ROOM] = "/modules/housing/ui/view.housingRoom.php";
         self::$s_Routes[PageUtil::$HOUSING_DETAIL] = "/modules/housing/ui/view.housingDetails.php";
         self::$s_Routes[PageUtil::$HOUSING_ROOM_ASSIGN] = "/modules/housing/ui/view.housingRoomAssign.php";
         self::$s_Routes[PageUtil::$HOUSING_SEARCH] = "/modules/housing/ui/view.housingSearch.php";
         self::$s_Routes[PageUtil::$HOUSING_APPLICATION] = "/modules/housing/ui/view.housingApplication.php";
         self::$s_Routes[PageUtil::$HOUSING_APPLICATION_MANAGE] = "/modules/housing/ui/view.housingApplicationManage.php";
         self::$s_Routes[PageUtil::$APPLICATION_TEMPLATE] = "/modules/housing/ui/view.applicationTemplate.php";
         self::$s_Routes[PageUtil::$APPLICATION_FORMAT] = "/modules/housing/ui/view.applicationFormat.php";
 

        //the page not found will redirect to error page
         self::$s_Routes[PageUtil::$ERROR] = "modules/dashboard/ui/view.error.php";

      
    }

    public static function getInstance() {
        if(!self::$s_instance) { // If no instance then make one
            self::$s_instance = new self();
        }
        return self::$s_instance;
    }

    public static function get($Page){

        $Page = strtolower(trim($Page)); 

        if(array_key_exists($Page, self::$s_Routes)){
        
            return self::$s_Routes[$Page];
        }
        else{
        
            return self::$s_Routes[PageUtil::$ERROR]; 
        }
    }

}

class MiddlewareUtil{

    private static $s_Routes; //The single instance
    private static $s_instance; //The single instance


    private function __construct(){
        
         self::$s_Routes = array();

        //add which page should be successfully logged before getting to this page
        //example: login.php should be successfully logged in to get to home.php
         self::$s_Routes[PageUtil::$HOME]   =  PageUtil::$LOGIN ;

   
         self::$s_Routes[PageUtil::$USER]   =  PageUtil::$LOGIN ;
         self::$s_Routes[PageUtil::$USER_DETAILS]   =  PageUtil::$LOGIN ;

         self::$s_Routes[PageUtil::$HALL]   =  PageUtil::$LOGIN ;

         self::$s_Routes[PageUtil::$HOUSING_TYPE]   =  PageUtil::$LOGIN ;
         self::$s_Routes[PageUtil::$HOUSING]   =  PageUtil::$LOGIN ;
         self::$s_Routes[PageUtil::$HOUSING_ROOM]   =  PageUtil::$LOGIN ;
         self::$s_Routes[PageUtil::$HOUSING_DETAIL]   =  PageUtil::$LOGIN ;
         self::$s_Routes[PageUtil::$HOUSING_ROOM_ASSIGN]   =  PageUtil::$LOGIN ;
         self::$s_Routes[PageUtil::$HOUSING_SEARCH]   =  PageUtil::$LOGIN ;
         self::$s_Routes[PageUtil::$HOUSING_APPLICATION]   =  PageUtil::$LOGIN ;
         self::$s_Routes[PageUtil::$HOUSING_APPLICATION_MANAGE]   =  PageUtil::$LOGIN ;
         self::$s_Routes[PageUtil::$APPLICATION_TEMPLATE]   =  PageUtil::$LOGIN ;
         self::$s_Routes[PageUtil::$APPLICATION_FORMAT]   =  PageUtil::$LOGIN ;
         

         self::$s_Routes[PageUtil::$ROLE]   =  PageUtil::$LOGIN ;
         self::$s_Routes[PageUtil::$PERMISSION]   =  PageUtil::$LOGIN ;
         

         self::$s_Routes[PageUtil::$DISCIPLINE]   =  PageUtil::$LOGIN ;
   
    }

    public static function getInstance() {
        if(!self::$s_instance) { // If no instance then make one
            self::$s_instance = new self();
        }
        return self::$s_instance;
    }

    private static function isAvailable($Page){

        $Page = strtolower(trim($Page)); 

        //if the page is refereneced in the middleware
        if(array_key_exists($Page, self::$s_Routes)){
            
            return true;
        }
        else{
        
            return false; 
        }
    }

    public static function get($Page){


        //if page is referenced
        if(self::isAvailable($Page)){
            //start session and check whether the middleware is successfully crossed

            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }

            // other send initial page: example if logged out then go to login.php page
            return isset($_SESSION[self::$s_Routes[$Page]])? $Page: self::$s_Routes[$Page]; 

        }else{
            // if no middleware then just go on with the current request
            return $Page;
        }
    }

}

//finding different partse of an url
    function unparse_url($parsed_url) { 
        $scheme   = isset($parsed_url['scheme']) ? $parsed_url['scheme'] . '://' : ''; 
        $host     = isset($parsed_url['host']) ? $parsed_url['host'] : ''; 
        $port     = isset($parsed_url['port']) ? ':' . $parsed_url['port'] : ''; 
        $user     = isset($parsed_url['user']) ? $parsed_url['user'] : ''; 
        $pass     = isset($parsed_url['pass']) ? ':' . $parsed_url['pass']  : ''; 
        $pass     = ($user || $pass) ? "$pass@" : ''; 
        $path     = isset($parsed_url['path']) ? $parsed_url['path'] : ''; 
        $query    = isset($parsed_url['query']) ? '?' . $parsed_url['query'] : ''; 
        $fragment = isset($parsed_url['fragment']) ? '#' . $parsed_url['fragment'] : ''; 

        //extracting the page name such as user.php from the url
        $page = substr($path, strrpos($path,'/')+1,strrpos($path,'.php')-strrpos($path,'/')+strlen('.php'));

        return $page;
        //return "$scheme$user$pass$host$port$path$query$fragment"; 
} 


//applying middleware such as login.php comes before home.php
    function apply_middleware($page) { 
     
        // checking whtether there is any middleware     
        $page=MiddlewareUtil::get($page);   

        return $page;
         
    }

//finding different partse of an url
    function apply_routing(&$page) { 
     
        //looking for the extracted page in the route list
        $page=RouteUtil::get($page);

        return true;
    }




MiddlewareUtil::getInstance();
RouteUtil::getInstance();

?>