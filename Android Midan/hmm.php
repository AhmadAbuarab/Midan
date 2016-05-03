

        var HmmMobileApp = function () {

            this.logInId = "1-1NG1Z";
            this.mode = "Debug";
            this.env = "Dev";
            this.base_url = this.env == "Dev" ? "http://172.16.2.7:8011/" : "";
            // List Of Services
            this.services = new Object();
            
            
            // List Activites
            this.services.listActivities = {};
            this.services.listActivities.url = this.base_url + "hmm/maidan/mobile/inspectoractivities/query";

            this.services.listActivities.method = "GET";
            this.services.listActivities.template = "{LoginId:<param::logInId>}";
            // 1-1NG1Z
            this.services.listActivities.getResult = function (data) {
                return data['ListOfHmm_Maidan_Mobile_Get_Inspector_Activities']['HmmActionMobile'];
            };
            
            
            // List Conditions
            this.services.listConditions = {};
            this.services.listConditions.url = this.base_url + "hmm/maidan/mobile/getconditions/query";
            this.services.listConditions.method = "GET";
            this.services.listConditions.template = "{ActionId:<param::actionId>}";
            // 1-EDUN4U
            this.services.listConditions.getResult = function (data) {
                return data['ListOfHmm_Maidan_Mobile_Action_Conditions']['HmmActionMobile'];
            };
            
            
            // List Status
            this.services.listStatus = {};
            this.services.listStatus.url = this.base_url + "hmm/maidan/mobile/ActionStatus/query";
            this.services.listStatus.method = "GET";
            this.services.listStatus.template = "{Object_spcId:<param::objectSpcId>}";
            // 1-EDUN4U
            this.services.listStatus.getResult = function (data) {
                return data;
            }


            // List UpdConditions
            this.services.listUpdConditions = {};
            this.services.listUpdConditions.url = this.base_url + "hmm/maidan/mobile/action/conditions/update";
            this.services.listUpdConditions.method = "POST";
//            this.services.listUpdConditions.template = '﻿﻿{"HMM_spcMaidan_spcMobile_spcAction_spcUpd_spcConditions_spcWS_spcWF_Input":{"ListOfHmm_Maidan_Mobile_Action_Conditions":{"HmmActionMobile":{"ActivitySerialNumber":"91600013795","ActivityUID":"1-EDUN4U","InspectSubType":"رقابة محلات تجارية","LiceNumber":"10015","PrimaryOwnerId":"1-1NG1Z","SourcesName":"emad","Status":"اكتمل","StoreMainActivity":"تجارية","StoreNameARA":"emad","StoreNameENU":"emad","StoreOrder":"5","StoreRegNo":[],"StoreStartDate":[],"StoreStartHijriDate":[],"StoreSubActivity":"أجهزة تبريد","Type":"إستلام عملية رقابية","ListOfHmmMaidanActivitiesCond":[{"ActivityClassification":[],"Conditions":"اشتراط مع مهام متابعة جزاء صلاحية مشرف QA Do Not Change","IdenticalFlag":"Y","Name":"1-870243419","Note":[],"ParRowId":"1-EDUN4U","Type":"1-870243419"},{"ActivityClassification":[],"Conditions":"اشتراط مع مهام متابعة جزاء صلاحية مراقبQA Do Not Change","IdenticalFlag":"Y","Name":"1-870243423","Note":[],"ParRowId":"1-EDUN4U","Type":"1-870243423"},{"ActivityClassification":[],"Conditions":"اشتراط محلات 1","IdenticalFlag":"Y","Name":"1-870243427","Note":[],"ParRowId":"1-EDUN4U","Type":"1-870243427"},{"ActivityClassification":[],"Conditions":"اشتراط محلات 2","IdenticalFlag":"Y","Name":"1-870243431","Note":[],"ParRowId":"1-EDUN4U","Type":"1-870243431"},{"ActivityClassification":[],"Conditions":"اشتراط محلات 3","IdenticalFlag":"Y","Name":"1-870243435","Note":[],"ParRowId":"1-EDUN4U","Type":"1-870243435"},{"ActivityClassification":[],"Conditions":"اشتراط محلات QA","IdenticalFlag":"N","Name":"1-870243439","Note":[],"ParRowId":"1-EDUN4U","Type":"1-870243439"},{"ActivityClassification":[],"Conditions":"اشتراط مع مهام متابعة جزاء صلاحية مشرف QA Do Not Change","IdenticalFlag":"Y","Name":"1-870244099","Note":[],"ParRowId":"1-EDUN4U","Type":"1-870244099"},{"ActivityClassification":[],"Conditions":"اشتراط مع مهام متابعة جزاء صلاحية مراقبQA Do Not Change","IdenticalFlag":"Y","Name":"1-870244103","Note":[],"ParRowId":"1-EDUN4U","Type":"1-870244103"},{"ActivityClassification":[],"Conditions":"اشتراط محلات 1","IdenticalFlag":"Y","Name":"1-870244107","Note":[],"ParRowId":"1-EDUN4U","Type":"1-870244107"},{"ActivityClassification":[],"Conditions":"اشتراط محلات 2","IdenticalFlag":"Y","Name":"1-870244111","Note":[],"ParRowId":"1-EDUN4U","Type":"1-870244111"},{"ActivityClassification":[],"Conditions":"اشتراط محلات 3","IdenticalFlag":"Y","Name":"1-870244115","Note":[],"ParRowId":"1-EDUN4U","Type":"1-870244115"},{"ActivityClassification":[],"Conditions":"اشتراط محلات QA","IdenticalFlag":"Y","Name":"1-870244119","Note":[],"ParRowId":"1-EDUN4U","Type":"1-870244119"},{"ActivityClassification":[],"Conditions":"اشتراط مع مهام متابعة جزاء صلاحية مشرف QA Do Not Change","IdenticalFlag":"N","Name":"1-870280569","Note":[],"ParRowId":"1-EDUN4U","Type":"1-870280569"},{"ActivityClassification":[],"Conditions":"اشتراط مع مهام متابعة جزاء صلاحية مراقبQA Do Not Change","IdenticalFlag":"Y","Name":"1-870280573","Note":[],"ParRowId":"1-EDUN4U","Type":"1-870280573"},{"ActivityClassification":[],"Conditions":"اشتراط محلات 1","IdenticalFlag":"Y","Name":"1-870280577","Note":[],"ParRowId":"1-EDUN4U","Type":"1-870280577"},{"ActivityClassification":[],"Conditions":"اشتراط محلات 2","IdenticalFlag":"Y","Name":"1-870280581","Note":[],"ParRowId":"1-EDUN4U","Type":"1-870280581"},{"ActivityClassification":[],"Conditions":"اشتراط محلات 3","IdenticalFlag":"Y","Name":"1-870280585","Note":[],"ParRowId":"1-EDUN4U","Type":"1-870280585"},{"ActivityClassification":[],"Conditions":"اشتراط محلات QA","IdenticalFlag":"N","Name":"1-870280589","Note":[],"ParRowId":"1-EDUN4U","Type":"1-870280589"}]}},"ActionId":"1-EDUN4U"}}';
            this.services.listUpdConditions.template = '{"HMM_spcMaidan_spcMobile_spcAction_spcUpd_spcConditions_spcWS_spcWF_Input":{"ListOfHmm_Maidan_Mobile_Action_Conditions":{"HmmActionMobile":{"ActivitySerialNumber":<param::activitySerialNumber>,"ActivityUID":<param::activityUId>,"InspectSubType":<param::inspectSubType>,"LiceNumber":<param::liceNumber>,"PrimaryOwnerId":<param::primaryOwnerId>,"SourcesName":<param::sourcesName>,"Status":<param::status>,"StoreMainActivity":<param::storeMainActivity>,"StoreNameARA":<param::storeNameAra>,"StoreNameENU":<param::storeNameEnu>,"StoreOrder":<param::storeOrder>,"StoreRegNo":<param::storeRegNo>,"StoreStartDate":<param::storeStartDate>,"StoreStartHijriDate":<param::storeStartHijriDate>,"StoreSubActivity":<param::storeSubActivity>,"Type":<param::type1>,"ListOfHmmMaidanActivitiesCond":[{"ActivityClassification":<param::activityClassification>,"Conditions":<param::conditions>,"IdenticalFlag":<param::identicalFlag>,"Name":<param::name>,"Note":<param::note>,"ParRowId":<param::parRowId>,"Type":<param::type2>},{"ActivityClassification":<param::activityClassification>,"Conditions":<param::conditions2>,"IdenticalFlag":<param::identicalFlag2>,"Name":<param::name2>,"Note":<param::note2>,"ParRowId":<param::parRowId2>,"Type":<param::type3>},{"ActivityClassification":<param::activityClassification2>,"Conditions":<param::conditions3>,"IdenticalFlag":<param::identicalFlag3>,"Name":<param::name3>,"Note":<param::note4>,"ParRowId":<param::parRowId3>,"Type":<param::type5>},{"ActivityClassification":<param::activityClassification3>,"Conditions":<param::conditions4>,"IdenticalFlag":<param::identicalFlag5>,"Name":<param::name5>,"Note":<param::note5>,"ParRowId":<param::parRowId5>,"Type":<param::type6>},{"ActivityClassification":<param::activityClassification4>,"Conditions":<param::conditions6>,"IdenticalFlag":<param::identicalFlag6>,"Name":<param::name7>,"Note":<param::note7>,"ParRowId":<param::parRowId6>,"Type":<param::type7>},{"ActivityClassification":<param::activityClassification5>,"Conditions":<param::conditions7>,"IdenticalFlag":<param::identicalFlag8>,"Name":<param::name8>,"Note":<param::note8>,"ParRowId":<param::parRowId8>,"Type":<param::type8>},{"ActivityClassification":<param::ACTIVITYcLASSIFICATION9>,"Conditions":<param::conditions9>,"IdenticalFlag":<param::identicalFlag9>,"Name":<param::name9>,"Note":<param::note9>,"ParRowId":<param::parRowId9>,"Type":<param::type10>},{"ActivityClassification":<param::activityClassification10>,"Conditions":<param::conditions10>,"IdenticalFlag":<param::identicalFlag10>,"Name":<param::name10>,"Note":<param::note10>,"ParRowId":<param::parRowId10>,"Type":<param::type11>},{"ActivityClassification":<param::activityClassification11>,"Conditions":<param::conditions11>,"IdenticalFlag":<param::identicalFlag11>,"Name":<param::name11>,"Note":<param::note11>,"ParRowId":<param::parRowId11>,"Type":<param::type12>},{"ActivityClassification":<param::activityClassification12>,"Conditions":<param::conditions12>,"IdenticalFlag":<param::identicalFlag12>,"Name":<param::name12>,"Note":<param::note12>,"ParRowId":<param::parRowId12>,"Type":<param::type13>},{"ActivityClassification":<param::activityClassification12>,"Conditions":<param::conditions12>,"IdenticalFlag":<param::identityFlag12>,"Name":<param::name12>,"Note":<param::note12>,"ParRowId":<param::parRowId12>,"Type":<param::type12>},{"ActivityClassification":<param::activityClassification12>,"Conditions":<param::conditions12>,"IdenticalFlag":<param::identicalFlag12>,"Name":<param::name12>,"Note":<param::note12>,"ParRowId":<param::parRowId12>,"Type":<param::type12>},{"ActivityClassification":<param::activityClassification12>,"Conditions":<param::conditions12>,"IdenticalFlag":<param::identicalFlag12>,"Name":<param::name12>,"Note":<param::note12>,"ParRowId":<param::parRowId12>,"Type":<param::type12>},{"ActivityClassification":<param::activityClassification12>,"Conditions":<param::conditions12>,"IdenticalFlag":<param::identicalFlag12>,"Name":<param::name12>,"Note":<param::note12>,"ParRowId":<param::parRowId12>,"Type":<param::type12>},{"ActivityClassification":<param::activityClassification12>,"Conditions":<param::conditions12>,"IdenticalFlag":<param::identicalFlag12>,"Name":<param::name12>,"Note":<param::note12>,"ParRowId":<param::parRowId>,"Type":<param::type12>},{"ActivityClassification":<param::activityClassification12>,"Conditions":<param::conditions12>,"IdenticalFlag":<param::identicalFlag12>,"Name":<param::name12>,"Note":<param::note12>,"ParRowId":<param::parRowId12>,"Type":<param::type12>},{"ActivityClassification":<param::activityClassification12>,"Conditions":<param::conditions12>,"IdenticalFlag":<param::identicalFlag12>,"Name":<param::name12>,"Note":<param::note>,"ParRowId":<param::parRowId12>,"Type":<param::type12>},{"ActivityClassification":<param::activityClassification12>,"Conditions":<param::conditions>,"IdenticalFlag":<param::identicalFlag12>,"Name":<param::name12>,"Note":<param::note12>,"ParRowId":<param::parRowId12>,"Type":<param::type12>}]}},"ActionId":<param::actionId>}}';
            this.services.listUpdConditions.getResult = function (data) {
                return data;
            }


            // List Notes
            this.services.listNotes = {};
            this.services.listNotes.url = this.base_url + "hmmmaidanmobile/proxy/hmmmaidanmobilesetnotes";
            this.services.listNotes.method = "POST";
//            this.services.listNotes.template = '﻿{"HMM_spcMaidan_spcMobile_spcSet_spcNotes_spcWS_Input":{"ListOfHmm_Maidan_Mobile_Note":{"HmmActionMobile":{"@Operation":"?","ActivitySerialNumber":"91600013795","ActivityUID":"1-EDUN4U","InspectSubType":"رقابة محلات تجارية","LiceNumber":"10015","PrimaryOwnerId":"1-1NG1Z","SourcesName":"emad","Status":"اكتمل","StoreMainActivity":"تجارية","StoreNameARA":"emad","StoreNameENU":"emad","StoreOrder":"5","StoreRegNo":[],"StoreStartDate":[],"StoreStartHijriDate":[],"StoreSubActivity":"أجهزة تبريد","Type":"إستلام عملية رقابية","ListOfHmmMaidanMobileCaseNote":{"HmmMaidanMobileCaseNote":{"@Operation":"?","Id":"1-EE2OT4","Created":"02/28/2016 16:32:43","CreatedBy":"1-1NG1Z","Updated":"02/28/2016 16:32:43","UpdatedBy":"1-1NG1Z","ConflictId":"0","ModId":"0","Searchspec":null,"Case":null,"CaseId":"1-EDUN4U","ConditionDesc":null,"ConditionId":null,"CreatedHijriDate2":null,"ExternalCreatedBy":null,"ExternalFirstName":null,"ExternalLastName":null,"FirstName":null,"HLSCreated":null,"HLSCreatedBy":null,"HLSCreatedByName":null,"LastName":null,"Note":"ملاحظه 2","NoteDate":"02/28/2016","NoteType":"ملاحظة","PrimaryOrganizationId":null,"PrimaryOrganizationName":null,"Private":"N","RecordId":"1-EE2OT4","RejectReasonFlag":null}}}}}}';
            this.services.listNotes.template = '﻿{"HMM_spcMaidan_spcMobile_spcSet_spcNotes_spcWS_Input":{"ListOfHmm_Maidan_Mobile_Note":{"HmmActionMobile":{"@Operation":<param::operation>,"ActivitySerialNumber":<param::activitySerialNumber>,"ActivityUID":<param::activityUId>,"InspectSubType":<param::inspectSubType>,"LiceNumber":<param::liceNumber>,"PrimaryOwnerId":<param::primaryOwnerId>,"SourcesName":<param::sourceName>,"Status":<param::status>,"StoreMainActivity":"<param::storeMainActivity>","StoreNameARA":<param::storeNameAra>,"StoreNameENU":<param::storeNameEnu>,"StoreOrder":<param::storeOrder>,"StoreRegNo":<param::storeRegNo>,"StoreStartDate":<param::storeStartDate>,"StoreStartHijriDate":<param::storeStartHijriDate>,"StoreSubActivity":<param::storeSubActivity>,"Type":<param::type>,"ListOfHmmMaidanMobileCaseNote":{"HmmMaidanMobileCaseNote":{"@Operation":<param::operation2>,"Id":<param::id>,"Created":<param::created>,"CreatedBy":<param::createdBy>,"Updated":<param::updated>,"UpdatedBy":<param::updatedBy>,"ConflictId":<param::conflicted>,"ModId":<param::modId>,"Searchspec":<param::searchSpec>,"Case":<param::case>,"CaseId":<param::caseId>,"ConditionDesc":<param::conditionDesc>,"ConditionId":<param::conditionId>,"CreatedHijriDate2":<param::createdHijriDate2>,"ExternalCreatedBy":<param::externalCreatedBy>,"ExternalFirstName":<param::externalFirstName>,"ExternalLastName":<param::externalLastName>,"FirstName":<param::firstName>,"HLSCreated":<param::hlsCreated>,"HLSCreatedBy":<param::hlsCreatedBy>,"HLSCreatedByName":<param::hlsCreatedByName>,"LastName":<param::lastName>,"Note":<param::note>,"NoteDate":<param::noteDate>,"NoteType":<param::noteType>,"PrimaryOrganizationId":<param::primaryOrganizationId>,"PrimaryOrganizationName":<param::primaryOrganizationName>,"Private":<param::private>,"RecordId":<param::recordId>,"RejectReasonFlag":<param::rejectReasonFlag>}}}}}}';
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
        }

        HmmMobileApp.prototype.renderTemplate = function (service_name, params) {

            var template = this.services[service_name].template;
            $.each(params, function (key, value) {
                var regex = new RegExp("<param::" + key + ">", "g");
                template = template.replace(regex, '"' + value + '"');
            });
            return eval('(' + template + ')');
        };
        HmmMobileApp.prototype.sendRequest = function (service_name, params, callback) {

            var that = this;
//            console.log(that.services[service_name].url);
            $.ajax({
                url: that.services[service_name].url,
                type: that.services[service_name].method,
                contentType: "application/json; charset=utf-8",
                // if POST should changed to JSON.stringify
                // data: JSON.stringify(that.renderTemplate(service_name, params)),
                // if GET
                data: that.renderTemplate(service_name, params),
                success: function (data) {
                    data = that.services[service_name].getResult(data);
                    callback(data);
                }
            })
        };
        var obj = new HmmMobileApp();
        var myparams = {"logInId": "1-1NG1Z"};
        obj.sendRequest('listActivities', myparams, function (data) {
            console.log(data);
        });


