/**
 * Defines the API route we are using.
 */
var api_url = '';

switch( process.env.NODE_ENV ){
  case 'development':
    api_url = 'http://oven.loc/api/v1';
    break;
  case 'production':
    api_url = 'http://oven.com/api/v1';
    break;
}

export const OVEN_CONFIG = {
  API_URL: api_url,
}