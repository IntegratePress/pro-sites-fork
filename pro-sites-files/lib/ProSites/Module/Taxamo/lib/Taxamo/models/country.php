<?php
/**
 *  Copyright 2014 Taxamo, Ltd.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * $model.description$
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 *
 */
class Country {

  static $swaggerTypes = array(
      'ccn3' => 'string',
      'name' => 'string',
      'code' => 'string',
      'code_long' => 'string',
      'currency' => 'array[string]',
      'cca2' => 'string',
      'callingCode' => 'array[string]',
      'cca3' => 'string',
      'tax_number_country_code' => 'string',
      'codenum' => 'string',
      'tax_supported' => 'bool'

    );

  /**
  * Country ISO 3-digit code.
  */
  public $ccn3; // string
  /**
  * Country name.
  */
  public $name; // string
  /**
  * Two letter ISO country code.
  */
  public $code; // string
  /**
  * Three letter ISO country code.
  */
  public $code_long; // string
  /**
  * List of currencies.
  */
  public $currency; // array[string]
  /**
  * Two letter ISO country code.
  */
  public $cca2; // string
  /**
  * List of phone number calling codes.
  */
  public $callingCode; // array[string]
  /**
  * Three letter ISO country code.
  */
  public $cca3; // string
  /**
  * VAT number country code. Important for Greece.
  */
  public $tax_number_country_code; // string
  /**
  * Country ISO 3-digit code.
  */
  public $codenum; // string
  /**
  * True if tax calculation supported for this country.
  */
  public $tax_supported; // bool
  }

