

        var HmmMobileApp = function () {
            this.logedIn=0;
            // this.logInId = "1-1NG1Z";
            this.mode = "Debug";
            this.env = "Dev";
            this.base_url = this.env == "Dev" ? "http://172.16.2.7:8011/" : "";
            this.result="";
            // List Of Services
            this.services = new Object();
            
            // Login
            this.services.login = {};
            this.services.login.url = this.base_url + "hmm/maidan/mobile/user_bind/query";
            this.services.login.method = "POST";
            this.services.login.template = '{"InputParameters": {"IN_USER_UID": <param::userId>, "IN_USER_PASSWD": <param::userPass>}}';
            this.services.login.getResult = function (data) {
                return data;
            };

            // Login data
            this.services.loginData = {};
            this.services.loginData.url = this.base_url + "hmm/maidan/mobile/getuserId/query";
            this.services.loginData.method = "GET";
            this.services.loginData.template='{"UserName":<param::userName>}';
            this.services.loginData.getResult = function (data) {
                return data['ns:UserId'];
            };
            
            // List Activites
            this.services.listActivities = {};
            this.services.listActivities.url = this.base_url + "hmm/maidan/mobile/inspectoractivities/query";

            this.services.listActivities.method = "GET";
            this.services.listActivities.template = "{LoginId:<param::logInId>}";
            this.services.listActivities.getResult = function (data) {
                return data['ListOfHmm_Maidan_Mobile_Get_Inspector_Activities']['HmmActionMobile'];
            };
            
            
            // List Conditions
            this.services.listConditions = {};
            this.services.listConditions.url = this.base_url + "hmm/maidan/mobile/getconditions/query";
            this.services.listConditions.method = "GET";
            this.services.listConditions.template = "{ActionId:<param::actionId>}";
            this.services.listConditions.getResult = function (data) {
                return {'request':data['ListOfHmm_Maidan_Mobile_Action_Conditions']['HmmActionMobile'],'result':data['ListOfHmm_Maidan_Mobile_Action_Conditions']['HmmActionMobile']['ListOfHmmMaidanActivitiesCond']['HmmMaidanActivitiesCond']};
            };
            
            
            // List Status
            this.services.listStatus = {};
            this.services.listStatus.url = this.base_url + "hmm/maidan/mobile/ActionStatus/query";
            this.services.listStatus.method = "GET";
            this.services.listStatus.template = "{Object_spcId:<param::objectSpcId>}";
            this.services.listStatus.getResult = function (data) {
                return data;
            }


            // List UpdConditions
            this.services.listUpdConditions = {};
            this.services.listUpdConditions.url = this.base_url + "hmm/maidan/mobile/action/conditions/update";
            this.services.listUpdConditions.method = "POST";
           this.services.listUpdConditions.template = '';
            this.services.listUpdConditions.getResult = function (data) {
                return data;
            }


            // List Notes
            this.services.listNotes = {};
            this.services.listNotes.url = this.base_url + "hmm/maidan/mobile/notes/query";
            this.services.listNotes.method = "POST";
            // this.services.listNotes.template = '﻿{"HMM_spcMaidan_spcMobile_spcSet_spcNotes_spcWS_Input":{"ListOfHmm_Maidan_Mobile_Note":{"HmmActionMobile":{"@Operation":<param::operation>,"ActivitySerialNumber":<param::activitySerialNumber>,"ActivityUID":<param::activityUId>,"InspectSubType":<param::inspectSubType>,"LiceNumber":<param::liceNumber>,"PrimaryOwnerId":<param::primaryOwnerId>,"SourcesName":<param::sourceName>,"Status":<param::status>,"StoreMainActivity":<param::storeMainActivity>,"StoreNameARA":<param::storeNameAra>,"StoreNameENU":<param::storeNameEnu>,"StoreOrder":<param::storeOrder>,"StoreRegNo":<param::storeRegNo>,"StoreStartDate":<param::storeStartDate>,"StoreStartHijriDate":<param::storeStartHijriDate>,"StoreSubActivity":<param::storeSubActivity>,"Type":<param::type>,"ListOfHmmMaidanMobileCaseNote":{"HmmMaidanMobileCaseNote":{"@Operation":<param::operation>,"Id":<param::id>,"Created":<param::created>,"CreatedBy":<param::createdBy>,"Updated":<param::updated>,"UpdatedBy":<param::updatedBy>,"ConflictId":<param::conflictId>,"ModId":<param::modId>,"Searchspec":<param::searchSpec>,"Case":<param::case>,"CaseId":<param::caseId>,"ConditionDesc":<param::conditionDesc>,"ConditionId":<param::conditionId>,"CreatedHijriDate2":<param::createdHijriDate2>,"ExternalCreatedBy":<param::externalCreatedBy>,"ExternalFirstName":<param::externalFirstName>,"ExternalLastName":<param::externalLastName>,"FirstName":<param::firstName>,"HLSCreated":<param::hlsCreated>,"HLSCreatedBy":<param::hlsCreatedBy>,"HLSCreatedByName":<param::hlsCreatedByName>,"LastName":<param::lastName>,"Note":<param::note>,"NoteDate":<param::noteDate>,"NoteType":<param::noteType>,"PrimaryOrganizationId":<param::primaryOrganizationId>,"PrimaryOrganizationName":<param::primaryOrganizationName>,"Private":<param::private>,"RecordId":<param::recordId>,"RejectReasonFlag":<param::rejectReasonFlag>}}}}}}';
            this.services.listNotes.template = '﻿{"Notes_Input":{"ActionMobile":{"ActivitySerialNumber":<param::activitySerialNumber>,"ActivityUID":<param::activityUId>,"InspectSubType":<param::inspectSubType>,"LiceNumber":<param::liceNumber>,"PrimaryOwnerId":<param::primaryOwnerId>,"SourcesName":<param::sourceName>,"Status":<param::status>,"StoreMainActivity":<param::storeMainActivity>,"StoreNameARA":<param::storeNameAra>,"StoreNameENU":<param::storeNameEnu>,"StoreOrder":<param::storeOrder>,"StoreRegNo":<param::storeRegNo>,"StoreStartDate":<param::storeStartDate>,"StoreStartHijriDate":<param::storeStartHijriDate>,"StoreSubActivity":<param::storeSubActivity>,"Type":<param::type>,"MobileCaseNote":{"Id":<param::id>,"CaseId":<param::caseId>,"Note":<param::note>,"RecordId":<param::recordId>}}}}';
            // this.services.listNotes.template = '﻿';
            this.services.listNotes.getResult = function (data) {
                return data;
            }


            // List  getActivities
            this.services.listGetActivites = {};
            this.services.listGetActivites.url = this.base_url + "hmm/maidan/mobile/activity/query";
            this.services.listGetActivites.method = "POST";
//            this.services.listGetActivites.template = '{"HMM_spcMaidan_spcMobile_spcGet_spcActivity_spcWS_Input":{"Process_spcInstance_spcId":"?","Object_spcId":"?","Siebel_spcOperation_spcObject_spcId":"?","ListOfHmm_Maidan_Activity_Mobile":{"HmmActionMobile":{"@Operation":"?","ActivitySerialNumber":"91600013798","ActivityUID":"1-EDUN7D","InspectSubType":"رقابة محلات تجارية","LiceNumber":"10013","PrimaryOwnerId":"1-1NG1Z","SourcesName":"qadri","Status":"مجدول","StoreMainActivity":"غذائية","StoreNameARA":"qadri","StoreNameENU":"qadri","StoreOrder":"4","StoreRegNo":[],"StoreStartDate":[],"StoreStartHijriDate":[],"StoreSubActivity":"بقالة","Type":"إستلام عملية رقابية"}},"Case_spcId":null,"Error_spcCode":null,"Activity_spcId":"1-EDUN7D","Error_spcMessage":null}}';
            this.services.listGetActivites.template = '{"HMM_spcMaidan_spcMobile_spcGet_spcActivity_spcWS_Input":{"Process_spcInstance_spcId":<param::processSpcInstanceSpcId>,"Object_spcId":<param::objectSpcId>,"Siebel_spcOperation_spcObject_spcId":<param::siebleSpcOperationSpcObjectSpcId>,"ListOfHmm_Maidan_Activity_Mobile":{"HmmActionMobile":{"@Operation":<param::operation>,"ActivitySerialNumber":<param::activitySerialNumber>,"ActivityUID":<param::activityUId>,"InspectSubType":<param::inspectSubType>,"LiceNumber":<param::liceNumber>,"PrimaryOwnerId":<param::primaryOwnerId>,"SourcesName":<param::sourcesName>,"Status":<param::status>,"StoreMainActivity":<param::storeMainActivity>,"StoreNameARA":<param::storeNameAra>,"StoreNameENU":<param::storeNameEnu>,"StoreOrder":<param::storeOrder>,"StoreRegNo":<param::storeRegNo>,"StoreStartDate":<param::storeStarDate>,"StoreStartHijriDate":<param::storeStartHijriDate>,"StoreSubActivity":<param::storeSubActivity>,"Type":<param::type>}},"Case_spcId":<param::caseSpcId>,"Error_spcCode":<param::errorSpcId>,"Activity_spcId":<param::activitySpcId>,"Error_spcMessage":<param::errorSpcMessage>}}';
            this.services.listGetActivites.getResult = function (data) {
                return data['ListOfHmm_Maidan_Activity_Mobile']['HmmActionMobile'];
            }

            // Update violations
            this.services.listUptViolations = {};
            this.services.listUptViolations.url = this.base_url + "hmm/maidan/mobile/violation/update";
            this.services.listUptViolations.method="POST";
            this.services.listUptViolations.template='{"Upd_Violation_Input":{"ViolationSize":<param::ViolationSize>,"FactorType":<param::FactorType>,"DamageSize":<param::DamageSize>,"ViolationId":<param::ViolationId>,"ActivityId":<param::ActivityId>,"ViolationNumber":<param::violationNumber>}}';
            this.services.listUptViolations.getResult = function (data) {
                return data;
            }
        }

        HmmMobileApp.prototype.renderTemplate = function (service_name, params) {

            var template = this.services[service_name].template;

            if(template == ""){
                   return params;
            }else{
                $.each(params, function (key, value) {
                    var regex = new RegExp("<param::" + key + ">", "g");
                    template = template.replace(regex, '"' + value + '"');
                });
                if(service_name=='listUpdConditions')
                    return template;
                else     
                    return eval('(' + template + ')');
            }
        };
        HmmMobileApp.prototype.sendRequest = function (service_name, params, callback) {

        var that = this;
            if(that.services[service_name].method=='GET'){
                    $.ajax({
                        url: that.services[service_name].url,
                        type: that.services[service_name].method,
                        contentType: "application/json; charset=utf-8",
                        data: that.renderTemplate(service_name, params),
                        success: function (data) {
                            data = that.services[service_name].getResult(data);
                            callback(data);
                        }
                    })
                }
                else {
                        $.ajax({
                        url: that.services[service_name].url,
                        type: that.services[service_name].method,
                        contentType: "application/json; charset=utf-8",
                        dataType:'json',
                        data: JSON.stringify(that.renderTemplate(service_name, params)),
                        success: function (data) {
                            data = that.services[service_name].getResult(data);
                            callback(data);
                        }
                    })
                }
            
};




        


