'use strict';

var api = require('../../lib/api');
var chalk = require('chalk');
var FirebaseError = require('../../lib/error');
var loadCJSON = require('../../lib/loadCJSON');
var RSVP = require('rsvp');

var VALID_INDEX_MODES = [
  'ASCENDING',
  'DESCENDING'
];

/**
 * Validate an index is correctly formed, throws an exception for all
 * fatal errors.
 *
 * See:
 * https://firebase.google.com/docs/firestore/reference/rest/v1beta1/projects.databases.indexes#Index
 *
 * @param {string} index.collectionId index collection Id.
 * @param {object[]} index.fields array of index field specifications.
 */
var _validate = function(index) {
  var indexString = chalk.cyan(JSON.stringify(index));
  if (!index.collectionId) {
    throw new FirebaseError('Index must contain "collectionId": ' + indexString);
  }

  if (!index.fields) {
    throw new FirebaseError('Index must contain "fields": ' + indexString);
  }

  for (var i = 0; i < index.fields.length; i++) {
    var field = index.fields[i];

    if (!field.fieldPath) {
      throw new FirebaseError('All index fields must contain "fieldPath": ' + indexString);
    }

    if (!field.mode) {
      throw new FirebaseError('All index fields must contain "mode": ' + indexString);
    }

    if (VALID_INDEX_MODES.indexOf(field.mode) < 0) {
      throw new FirebaseError('Index field mode must be one of '
        + VALID_INDEX_MODES.join(', ') + ': ' + indexString);
    }
  }
};

/**
 * Create an index in the specified project.
 *
 * See:
 * https://firebase.google.com/docs/firestore/reference/rest/v1beta1/projects.databases.indexes#Index
 *
 * @param {string} project the Firestore project Id.
 * @param {string} index.collectionId index collection Id.
 * @param {object[]} index.fields array of index field specifications.
 * @return {Promise} a promise for index creation.
 */
var create = function(project, index) {
  _validate(index);

  var url = 'projects/' + project + '/databases/(default)/indexes';
  return api.request('POST', '/v1beta1/' + url, {
    auth: true,
    data: index,
    origin: api.firestoreOrigin
  });
};

/**
 * List all indexes in the specified project.
 *
 * See:
 * https://firebase.google.com/docs/firestore/reference/rest/v1beta1/projects.databases.indexes#Index
 *
 * @param {string} project the Firestore project Id.
 * @return {Promise<object[]>} a promise for an array of indexes.
 */
var list = function(project) {
  var url = 'projects/' + project + '/databases/(default)/indexes';

  return api.request('GET', '/v1beta1/' + url, {
    auth: true,
    origin: api.firestoreOrigin
  }).then(function(res) {
    var indexes = res.body.indexes || [];
    var result = [];

    // Clean up the index metadata so that they appear in the same
    // format as they would be specified in firestore.indexes.json
    for (var i = 0; i < indexes.length; i++) {
      var index = indexes[i];
      var sanitized = {};

      sanitized.collectionId = index.collectionId;
      sanitized.state = index.state;

      sanitized.fields = index.fields.filter(function(field) {
        return field.fieldPath !== '__name__';
      });

      result.push(sanitized);
    }

    return result;
  });
};

/**
 * Determines if two indexes are equal by comparing their collectionId
 * and field specifications. All other properties are ignored.
 *
 * @param {object} a a Firestore index.
 * @param {object} b a Firestore index.
 * @return {boolean} true if the indexes are equal, false otherwise.
 */
var equal = function(a, b) {
  if (a.collectionId !== b.collectionId) {
    return false;
  }

  if (a.fields.length !== b.fields.length) {
    return false;
  }

  for (var i = 0; i < a.fields.length; i++) {
    var aField = a.fields[i];
    var bField = b.fields[i];

    if (aField.fieldPath !== bField.fieldPath) {
      return false;
    }

    if (aField.mode !== bField.mode) {
      return false;
    }
  }

  return true;
};

/**
 * Create a unique hash for a Firestore index that can be used
 * for deduplication.
 *
 * @param {object} index a Firestore index.
 * @return {string} a unique hash.
 */
var has               return processHoursFunction('[Минулого] dddd [').call(this);
            }
        },
        sameElse: 'L'
    },
    relativeTime : {
        future : 'за %s',
        past : '%s тому',
        s : 'декілька секунд',
        ss : relativeTimeWithPlural,
        m : relativeTimeWithPlural,
        mm : relativeTimeWithPlural,
        h : 'годину',
        hh : relativeTimeWithPlural,
        d : 'день',
        dd : relativeTimeWithPlural,
        M : 'місяць',
        MM : relativeTimeWithPlural,
        y : 'рік',
        yy : relativeTimeWithPlural
    },
    // M. E.: those two are virtually unused but a user might want to implement them for his/her website for some reason
    meridiemParse: /ночі|ранку|дня|вечора/,
    isPM: function (input) {
        return /^(дня|вечора)$/.test(input);
    },
    meridiem : function (hour, minute, isLower) {
        if (hour < 4) {
            return 'ночі';
        } else if (hour < 12) {
            return 'ранку';
        } else if (hour < 17) {
            return 'дня';
        } else {
            return 'вечора';
        }
    },
    dayOfMonthOrdinalParse: /\d{1,2}-(й|го)/,
    ordinal: function (number, period) {
        switch (period) {
            case 'M':
            case 'd':
            case 'DDD':
            case 'w':
            case 'W':
                return number + '-й';
            case 'D':
                return number + '-го';
            default:
                return number;
        }
    },
    week : {
        dow : 1, // Monday is the first day of the week.
        doy : 7  // The week that contains Jan 1st is the first week of the year.
    }
});

return uk;

})));
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           h = function(index) {
  var result = '';
  result += index.collectionId;
  result += '[';

  for (var i = 0; i < index.fields.length; i++) {
    var field = index.fields[i];

    // Skip __name__ fields
    if (field.fieldPath === '__name__') {
      continue;
    }

    // Append the field description
    result += '(';
    result += field.fieldPath + ',' + field.mode;
    result += ')';
  }

  result += ']';

  return result;
};

/**
 * Get a colored, pretty printed representation of an index.
 *
 * @param {object} index a Firestore index.
 * @return {string} string for logging.
 */
var toPrettyString = function(index) {
  var result = '';

  if (index.state) {
    var stateMsg = '[' + index.state + '] ';

    if (index.state === 'READY') {
      result += chalk.green(stateMsg);
    } else if (index.state === 'CREATING') {
      result += chalk.yellow(stateMsg);
    } else {
      result += chalk.red(stateMsg);
    }
  }

  result += chalk.cyan('(' + index.collectionId + ')');
  result += ' -- ';

  index.fields.forEach(function(field) {
    if (field.fieldPath === '__name__') {
      return;
    }

    result += '(' + field.fieldPath + ',' + field.mode + ') ';
  });

  return result;
};

/**
 * Prepare indexes for deployment.
 */
var prepare = function(context, options) {
  var indexesFileName = options.config.get('firestore.indexes');
  var indexesPath = options.config.path(indexesFileName);
  var parsedSrc = loadCJSON(indexesPath);

  if (!parsedSrc.indexes) {
    throw new FirebaseError('Indexes file must contain "indexes" property: ' + indexesPath);
  }

  parsedSrc.indexes.forEach(function(index) {
    _validate(index);
  });

  context.firestore = context.firestore || {};
  context.firestore.indexes = {
    name: indexesFileName,
    content: parsedSrc
  };

  return RSVP.resolve();
};

module.exports = {
  create: create,
  list: list,
  equal: equal,
  hash: hash,
  toPrettyString: toPrettyString,
  prepare: prepare
};
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    // Copyright 2016 Google Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

syntax = "proto3";

package google.cloud.vision.v1;

import "google/api/annotations.proto";
import "google/cloud/vision/v1/geometry.proto";
import "google/cloud/vision/v1/text_annotation.proto";
import "google/cloud/vision/v1/web_detection.proto";
import "google/rpc/status.proto";
import "google/type/color.proto";
import "google/type/latlng.proto";

option cc_enable_arenas = true;
option go_package = "go