// biome-ignore lint/style/useNodejsImportProtocol: <explanation>
import * as querystring from 'querystring';
import config, { tutorConfig } from '@Config/config';
import axios from 'axios';

import { convertToFormData, serializeParams } from './form';

axios.defaults.paramsSerializer = (params: Record<string, string>) => {
  return querystring.stringify(params);
};

export const publicApiInstance = axios.create({
  baseURL: config.TUTOR_API_BASE_URL,
});

export const authApiInstance = axios.create({
  baseURL: config.TUTOR_API_BASE_URL,
});

authApiInstance.interceptors.request.use(
  (config) => {
    config.headers ||= {};

    config.data._tutor_nonce = tutorConfig._tutor_nonce;

    if (config.method && ['post', 'put', 'patch'].includes(config.method.toLocaleLowerCase())) {
      if (config.data) {
        config.data = convertToFormData(config.data, config.method);
      }

      if (['put', 'patch'].includes(config.method.toLowerCase())) {
        config.method = 'POST';
      }
    }

    if (config.params) {
      config.params = serializeParams(config.params);
    }

    if (config.method && ['get', 'delete'].includes(config.method.toLowerCase())) {
      config.params = { ...config.params, _method: config.method };
    }

    return config;
  },
  (err) => {
    return Promise.reject(err);
  }
);

authApiInstance.interceptors.response.use((response) => {
  return Promise.resolve<{ data: unknown }>(response).then((res) => res.data);
});

export const wpAuthApiInstance = axios.create({
  baseURL: config.WP_API_BASE_URL,
});

wpAuthApiInstance.interceptors.request.use(
  (config) => {
    config.headers ||= {};

    config.headers['X-WP-Nonce'] = window.wpApiSettings.nonce;

    if (config.method && ['post', 'put', 'patch'].includes(config.method.toLocaleLowerCase())) {
      if (config.data) {
        config.data = convertToFormData(config.data, config.method);
      }

      if (['put', 'patch'].includes(config.method.toLowerCase())) {
        config.method = 'POST';
      }
    }

    if (config.params) {
      config.params = serializeParams(config.params);
    }

    if (config.method && ['get', 'delete'].includes(config.method.toLowerCase())) {
      config.params = { ...config.params, _method: config.method };
    }

    return config;
  },
  (err) => {
    return Promise.reject(err);
  }
);

wpAuthApiInstance.interceptors.response.use((response) => {
  return Promise.resolve<{ data: unknown }>(response).then((res) => res);
});
