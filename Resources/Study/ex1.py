cart = {

'NetGear' : {'switch' : ['5-Port Gigabit Ethernet Unmanaged Switch:300:4.2','18-Port Gigabit Ethernet Unmanaged Switch:1800:4.3',' 36-Port Gigabit Ethernet Unmanaged Switch:3000:4.2']},

'LinkSys' : {'switch' : ['6-Port Gigabit Ethernet Unmanaged Switch:1200:3.7',' 24-Port Gigabit Ethernet Unmanaged Switch:2200:3.3',' 48-Port Gigabit Ethernet Unmanaged Switch:3200:4.1']},

'D-Link' : {'switch' : ['12-Port Gigabit Ethernet Unmanaged Switch:700:4.1',' 18-Port Gigabit Ethernet Unmanaged Switch:2000:4.9',' 24-Port Gigabit Ethernet Unmanaged Switch:2200:4.3']},

'Buffalo' : {'switch' : ['8-Port Gigabit Ethernet Unmanaged Switch:400:4.3',' 18-Port Gigabit Ethernet Unmanaged Switch:600:4.8',' 36-Port Gigabit Ethernet Unmanaged Switch:1200:4.3']},

'Jupiter' : {'router' : ['2-Port Gigabit manageable router:1200:3.3',' 2-Port Gigabit VoIP router:2000:3.3',' 4-Port Gigabit Enterprise WAN router:200:4.3']}

}

for k1 in cart.keys():
    vendorProductDict = cart.get(k1)
    for k2 in vendorProductDict.keys():
        productList = vendorProductDict.get(k2)
        for i in range(len(productList)):
            itemInfoList = productList[i].split(':')
            if '18-Port' in itemInfoList[0]:
                print(itemInfoList[0])
                print(itemInfoList[1])

