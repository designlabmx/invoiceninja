<?php
/**
 * Invoice Ninja (https://invoiceninja.com)
 *
 * @link https://github.com/invoiceninja/invoiceninja source repository
 *
 * @copyright Copyright (c) 2019. Invoice Ninja LLC (https://invoiceninja.com)
 *
 * @license https://opensource.org/licenses/AAL
 */

namespace App\DataMapper;

use App\DataMapper\CompanySettings;
use App\Models\Company;

/**
 * CompanySettings
 */
class CompanySettings extends BaseSettings
{

	/*Group settings based on functionality*/

	/*Invoice*/
	public $auto_archive_invoice = false;
	public $lock_sent_invoices = false;


	public $timezone_id = '';
	public $date_format_id = '';
	public $military_time = false;

	public $language_id = '';
	public $show_currency_code = false;

	public $company_gateway_ids = '';

	public $currency_id = '1';

	public $custom_value1 = '';
	public $custom_value2 = '';
	public $custom_value3 = '';
	public $custom_value4 = '';

	public $custom_invoice_taxes1 = false;
	public $custom_invoice_taxes2 = false;
	public $custom_invoice_taxes3 = false;
	public $custom_invoice_taxes4 = false;

	public $default_task_rate = 0;

	public $payment_terms = 1; 
	public $send_reminders = false;
	public $show_tasks_in_portal = false;

	public $custom_message_dashboard = '';
	public $custom_message_unpaid_invoice = '';
	public $custom_message_paid_invoice = '';
	public $custom_message_unapproved_quote = '';
	public $auto_archive_quote = false;
	public $auto_convert_quote = false;

	public $inclusive_taxes = false;

	public $translations;

	/* Counters */
	public $invoice_number_pattern = '';
	public $invoice_number_counter = 1;
	public $invoice_number_prefix = '';

	public $quote_number_prefix = '';
	public $quote_number_pattern = '';
	public $quote_number_counter = 1;

	public $client_number_prefix = '';
	public $client_number_pattern = '';
	public $client_number_counter = 1;

	public $credit_number_prefix = '';
	public $credit_number_pattern = '';
	public $credit_number_counter = 1;

	public $task_number_prefix = '';
	public $task_number_pattern = '';
	public $task_number_counter = 1;

	public $expense_number_prefix = '';
	public $expense_number_pattern = '';
	public $expense_number_counter = 1;

	public $vendor_number_prefix = '';
	public $vendor_number_pattern = '';
	public $vendor_number_counter = 1;

	public $ticket_number_prefix = '';
	public $ticket_number_pattern = '';
	public $ticket_number_counter = 1;

	public $payment_number_prefix = '';
	public $payment_number_pattern = '';
	public $payment_number_counter = 1;


	public $shared_invoice_quote_counter = false;
	public $recurring_invoice_number_prefix = 'R';
	public $reset_counter_frequency_id = '0';
	public $reset_counter_date = '';
	public $counter_padding = 4;

	public $design = 'views/pdf/design1.blade.php';

	public $invoice_terms = '';
	public $quote_terms = '';
	public $invoice_taxes = false;
	public $invoice_item_taxes = false;
	public $invoice_design_id = '1';
	public $quote_design_id = '1';
	public $invoice_footer = '';
	public $invoice_labels = '';
	public $show_item_taxes = false;
	public $tax_name1 = '';
	public $tax_rate1 = 0;
	public $tax_name2 = '';
	public $tax_rate2 = 0;
	public $tax_name3 = '';
	public $tax_rate3 = 0;
	public $payment_type_id = '1';
	public $custom_fields = '';
	public $invoice_fields = '';

	public $enable_portal_password = false;
	public $show_accept_invoice_terms = false;
	public $show_accept_quote_terms = false;
	public $require_invoice_signature = false;
	public $require_quote_signature = false;

	//email settings
	public $reply_to_email = '';
	public $bcc_email = '';
	public $pdf_email_attachment = false;
	public $ubl_email_attachment = false;

	public $email_style = ''; //plain, light, dark, custom
	public $email_style_custom = ''; //the template itself
	public $email_subject_invoice = '';
	public $email_subject_quote = '';
	public $email_subject_payment = '';
	public $email_template_invoice = '';
	public $email_template_quote = '';
	public $email_template_payment = '';
	public $email_subject_reminder1 = '';
	public $email_subject_reminder2 = '';
	public $email_subject_reminder3 = '';
	public $email_subject_reminder_endless = '';
	public $email_template_reminder1 = '';
	public $email_template_reminder2 = '';
	public $email_template_reminder3 = '';
	public $email_template_reminder_endless = '';
	public $email_footer = '';

	/* Company Meta data that we can use to build sub companies*/

	public $name = '';
	public $company_logo = '';
	public $website = '';
	public $address1 = '';
	public $address2 = '';
	public $city = '';
	public $state = '';
	public $postal_code = '';
	public $phone = '';
	public $email = '';
	public $country_id;
	public $vat_number = '';
	public $id_number = '';

	public $page_size = 'A4'; 
    public $font_size = 9; 
    public $primary_font = 'roboto';
    public $secondary_font = 'roboto';
    public $hide_paid_to_date = false;
    public $embed_documents = false; 
    public $all_pages_header = true;
    public $all_pages_footer = true;


	public static $casts = [
		'page_size' => 'string',
		'font_size' => 'int',
		'primary_font' => 'string',
		'secondary_font' => 'string',
		'hide_paid_to_date' => 'bool',
		'embed_documents' => 'bool',
		'all_pages_header' => 'bool',
		'all_pages_footer' => 'bool',
		'task_number_prefix' => 'string',	
		'task_number_pattern' => 'string',
		'task_number_counter' => 'int',
		'expense_number_prefix' => 'string',
		'expense_number_pattern' => 'string',
		'expense_number_counter' => 'int',
		'vendor_number_prefix' => 'string',
		'vendor_number_pattern' => 'string',
		'vendor_number_counter' => 'int',
		'ticket_number_prefix' => 'string',
		'ticket_number_pattern' => 'string',
		'ticket_number_counter' => 'int',
		'payment_number_prefix' => 'string',
		'payment_number_pattern' => 'string',
		'payment_number_counter' => 'int',
		'reply_to_email' => 'string',
		'bcc_email' => 'string',
		'pdf_email_attachment' => 'bool',
		'ubl_email_attachment' => 'bool',
		'email_style' => 'string',
		'email_style_custom' => 'string',
		'company_gateway_ids' => 'string',
		'address1' => 'string',
		'address2' => 'string',
		'city' => 'string',
		'company_logo' => 'string',
		'country_id' => 'string',
		'client_number_prefix' => 'string',
		'client_number_pattern' => 'string',
		'client_number_counter' => 'integer',
		'credit_number_prefix' => 'string',
		'credit_number_pattern' => 'string',
		'credit_number_counter' => 'integer',
		'currency_id' => 'string',
		'custom_value1' => 'string',
		'custom_value2' => 'string',
		'custom_value3' => 'string',
		'custom_value4' => 'string',
		'custom_invoice_taxes1' => 'bool',
		'custom_invoice_taxes2' => 'bool',
		'custom_invoice_taxes3' => 'bool',
		'custom_invoice_taxes4' => 'bool',
		'custom_message_dashboard' => 'string',
		'custom_message_unpaid_invoice' => 'string',
		'custom_message_paid_invoice' => 'string',
		'custom_message_unapproved_quote' => 'string',
		'custom_fields' => 'string',
		'default_task_rate' => 'float',
		'email_footer' => 'string',
		'email_subject_invoice' => 'string',
		'email_subject_quote' => 'string',
		'email_subject_payment' => 'string',
		'email_template_invoice' => 'string',
		'email_template_quote' => 'string',
		'email_template_payment' => 'string',
		'email_subject_reminder1' => 'string',
		'email_subject_reminder2' => 'string',
		'email_subject_reminder3' => 'string',
		'email_subject_reminder_endless' => 'string',
		'email_template_reminder1' => 'string',
		'email_template_reminder2' => 'string',
		'email_template_reminder3' => 'string',
		'email_template_reminder_endless' => 'string',
		'enable_portal_password' => 'bool',
		'inclusive_taxes' => 'bool',
		'invoice_number_prefix' => 'string',
		'invoice_number_pattern' => 'string',
		'invoice_number_counter' => 'integer',
		'invoice_design_id' => 'string',
		'invoice_fields' => 'string',
		'invoice_taxes' => 'bool',
		'invoice_item_taxes' => 'bool',
		'invoice_footer' => 'string',
		'invoice_labels' => 'string',
		'invoice_terms' => 'string',
		'name' => 'string',
		'payment_terms' => 'integer', 
		'payment_type_id' => 'string',
		'phone' => 'string',
		'postal_code' => 'string',
		'quote_design_id' => 'string',
		'quote_number_prefix' => 'string',
		'quote_number_pattern' => 'string',
		'quote_number_counter' => 'integer',
		'quote_terms' => 'string',
		'recurring_invoice_number_prefix' => 'string',
		'reset_counter_frequency_id' => 'integer',
		'reset_counter_date' => 'string',
		'require_invoice_signature' => 'bool',
		'require_quote_signature' => 'bool',
		'show_item_taxes' => 'bool',
		'state' => 'string',
		'email' => 'string',
		'vat_number' => 'string',
		'id_number' => 'string',
		'tax_name1' => 'string',
		'tax_name2' => 'string',
		'tax_name3' => 'string',
		'tax_rate1' => 'float',
		'tax_rate2' => 'float',
		'tax_rate3' => 'float',
		'show_accept_quote_terms' => 'bool',
		'show_accept_invoice_terms' => 'bool',
		'timezone_id' => 'string',
		'date_format_id' => 'string',
		'military_time' => 'bool',
		'language_id' => 'string',
		'show_currency_code' => 'bool',
		'send_reminders' => 'bool',
		'show_tasks_in_portal' => 'bool',
		'lock_sent_invoices' => 'bool',
		'auto_archive_invoice' => 'bool',
		'auto_archive_quote' => 'bool',
		'auto_convert_quote' => 'bool',
		'shared_invoice_quote_counter' => 'bool',
		'counter_padding' => 'integer',
		'design' => 'string',
		'website' => 'string',
	];

	/**
	 * Array of variables which
	 * cannot be modified client side
	 */
	public static $protected_fields = [
	//	'credit_number_counter',
	//	'invoice_number_counter',
	//	'quote_number_counter',
	];

	/**
	 * Cast object values and return entire class
	 * prevents missing properties from not being returned
	 * and always ensure an up to date class is returned
	 * 
	 * @return \stdClass	
     */
	public function __construct($obj)
	{
	//	parent::__construct($obj);
	}

	/**
	 * Provides class defaults on init
	 * @return object
	 */
	public static function defaults() : \stdClass
	{
		
		$config = json_decode(config('ninja.settings'));
		
		$data = (object)get_class_vars(CompanySettings::class);
		unset($data->casts);
		unset($data->protected_fields);

		$data->timezone_id = (string)config('ninja.i18n.timezone_id');
		$data->currency_id = (string)config('ninja.i18n.currency_id');
		$data->language_id = (string)config('ninja.i18n.language_id');
		$data->payment_terms = (int)config('ninja.i18n.payment_terms');
		$data->military_time = (bool)config('ninja.i18n.military_time');
		$data->date_format_id = (string)config('ninja.i18n.date_format_id');
		$data->country_id = (string)config('ninja.i18n.country_id');
		$data->translations = (object) [];
		
		return self::setCasts($data, self::$casts);

	}

	/**
	 * In case we update the settings object in the future we
	 * need to provide a fallback catch on old settings objects which will
	 * set new properties to the object prior to being returned.
	 * 
	 * @param object $data The settings object to be checked
	 */
	public static function setProperties($settings) :\stdClass
	{

		$company_settings = (object)get_class_vars(CompanySettings::class);

		foreach($company_settings as $key => $value)
		{

			if(!property_exists($settings, $key))
				$settings->{$key} = self::castAttribute($key, $company_settings->{$key});
			
		}

		return $settings;

	}

}
