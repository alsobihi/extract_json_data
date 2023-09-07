# https://developer.wathq.sa/ar/api/16#/
import json

 
with open('fullinfo.json','r',encoding='utf-8') as json_File :
    data=json.load(json_File)
    
print(data)


print(data['crName'])
print(data['crNumber'])
print(data['crEntityNumber'])
print(data['issueDate'])
print(data['expiryDate'])

print('capital')
print(data['capital']['paidAmount'])
print(data['capital']['subscribedAmount'])
print(data['capital']['announcedAmount'])



print('share')
print(data['capital']['share']['sharePrice'])
print(data['capital']['share']['sharesCount'])

print(data['crMainNumber'])


print('parties')
parties = len(data['parties'])
i = 0
while (i < parties):
    print(data['parties'][i]['name'])
    print(data['parties'][i]['birthDate'])
    print(data['parties'][i]['sharesCount'])
    print(data['parties'][i]['gross'])
  
    print('identity')
    print(data['parties'][i]['identity']['id'])
    print(data['parties'][i]['identity']['type'])


    print('relation')
    print(data['parties'][i]['relation']['id'])
    print(data['parties'][i]['relation']['name'])

    print('nationality')
    print(data['parties'][i]['nationality']['id'])
    print(data['parties'][i]['nationality']['name'])


    i = i + 1



print('businessType')
print(data['businessType']['id'])
print(data['businessType']['name'])


print('fiscalYear')
print(data['fiscalYear']['month'])
print(data['fiscalYear']['day'])

print(data['fiscalYear']['calendarType']['id'])
print(data['fiscalYear']['calendarType']['name'])


print('status')
print(data['status']['id'])
print(data['status']['name'])
print(data['status']['nameEn'])

print('cancellation')
print(data['cancellation']['date'])
print(data['cancellation']['reason'])

print('cancellation')
print(data['address']['general']['website'])
print(data['address']['general']['address'])
print(data['address']['general']['email'])
print(data['address']['general']['fax1'])
print(data['address']['general']['fax2'])
print(data['address']['general']['telephone1'])
print(data['address']['general']['telephone2'])
print(data['address']['general']['postalBox1'])
print(data['address']['general']['postalBox2'])

print('national')
print(data['address']['national']['buildingNumber'])
print(data['address']['national']['additionalNumber'])
print(data['address']['national']['streetName'])
print(data['address']['national']['city'])
print(data['address']['national']['zipcode'])
print(data['address']['national']['unitNumber'])
print(data['address']['national']['district']['id'])
print(data['address']['national']['district']['name'])


print(data['isEcommerce'])


print('urls')
urls = len(data['urls'])
i = 0
while (i < urls):
    print(data['urls'][i]['name'])
    print(data['urls'][i]['type'])
    print(data['urls'][i]['typeId'])

    i = i + 1



print('location')
print(data['location']['id'])
print(data['location']['name'])

print('company')
print(data['company']['period'])
print(data['company']['startDate'])
print(data['company']['endDate'])

print('activities')
print(data['activities']['description'])

print('isic')
isic = len(data['activities']['isic'])
i = 0
while (i < isic):
    print(data['activities']['isic'][i]['id'])
    print(data['activities']['isic'][i]['name'])
    print(data['activities']['isic'][i]['nameEn'])

    i = i + 1
