# Repartee

Repartee is a plugin for PHP apps to interact with and utilise the TextLocal.com API to send and receive SMS/MMS messages.

# Configuration
### (Repartee/config/ReparteeConfig.php)

In the main configuration file you can set the API credentials, sender's name, base url, and TextLocal API endpoints.

	# Test Mode
	protected static $test_mode = '1';
	
	# Credentials
	protected static $username = 'test@example.com';
	protected static $password = 'letmein';
	protected static $hash     = '987fs9d8f7sd9f7sd9f7sd9f8sd98fsd98f7sdf9sf';  # Deprecated in favour of API Keys
	protected static $apikey   = '67sd65f8s6df86sdf76ds8f68s7d6f8sd7f68sd7';    # Favoured over Hash Keys
        
	# Sender Name / Number
	protected static $sender   = 'Repartee';
	
	# API Base URL
	protected static $base_url = 'https://api.txtlocal.com/';
	
	# Response Data Format
	protected static $response_format = 'xml';  # xml or json
	
	# API End-Points
	protected static $send_sms = 'send/';
	protected static $inboxes = 'get_inboxes/';
	protected static $messages = 'get_messages/';
	protected static $scheduled = 'get_scheduled/';
	protected static $cancel_scheduled = 'cancel_scheduled/';
	protected static $contacts = 'get_contacts/';
	protected static $create_contact = 'create_contacts/';
	protected static $delete_contact = 'delete_contact/';
	protected static $groups = 'get_groups/';
	protected static $create_group = 'create_group/';
	protected static $delete_group = 'delete_group/';
	protected static $get_single_history = 'get_history_single/';
	protected static $get_group_history = 'get_history_group/';
	protected static $get_api_history = 'get_history_api/';
	protected static $message_status = 'status_message/';
	protected static $batch_status = 'status_batch/';

## Sending an SMS Message

Repartee supports three ways to operate the send message class suite :-

1. Constructor
2. Chaining
3. Attribute

We can see three simple examples of these below :-

### Constructor

    # Send SMS -- Constructor Example
    use Repartee\Repartee;

    $resp = Repartee::NewMessage ([
        'Recipients' => ['00000000000', '11111111111'],
        'Message' => 'Hello world!'
    ])->Send();

### Chaining

    # Send SMS -- Chaining Example
    use Repartee\Repartee;

    $resp = Repartee::NewMessage()
    ->setRecipients (['00000000000', '11111111111'])
    ->setMessage ('Hello world!')
    ->Send();

### Attribute

    # Send SMS -- Attribute Example
    use Repartee\Repartee;

    $sms = Repartee::NewMessage();
    $sms->Recipients = ['00000000000', '11111111111'];
    $sms->Message = 'Hello world!';
    $resp = $sms->Send();

## Get Inboxes

With TextLocal you can have inboxes.  The 'getInboxes' function will return a list of your inboxes, and the statistics for them (such as No. of Messages and No. of Contacts).  Using this return data you can then query a specific inbox using the 'getMessages' function.

    # Repartee -- Constructor Example
    use Repartee\Repartee;

    $resp = Repartee::getInboxes()->send();

## Get Inbox Messages

Use the getMessages function with an inbox_id to retrieve the messages within it.

    # Repartee -- Constructor Example
    use Repartee\Repartee;

    $resp = Repartee::getMessages()->send();

## More Information & News

For more information and news regarding this plugin please contact me via my technology blog.
