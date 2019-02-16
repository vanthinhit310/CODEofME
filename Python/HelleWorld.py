print('Hello World')
print('Thinh')
print('Website: \"Google.com.vn\"')

print('Website: \a Facebook.com.vn')

hide = "Thanh"
full = "%s ơi anh yêu em" % (hide)
print(full)
str = "Tôi là một Feeder"
print(str[0])
print(str[-1])
print(str[0:3])
# list trong python
name = ["Lê Văn Thịnh", "Phạm Minh Hiển", "Nguyễn Văn Tân", "Nguyễn Tấn Hậu"]
print(name)

# update list
name[3] = "Vũ Thị Mai Thanh"
print(name)

# del một phần tử trong mang

del name[2]
print(name)
sub = "Xin chào mọi người Tôi là PYTHON"
print("Center() : " + sub.center(20, '*'))


def ktDiem(diem):
    if diem < 4:
        print("Ban rớt môn")
    elif 4 <= diem <= 6.5:
        print("Học sinh khá")
    elif 6.5 <= diem <= 8:
        print('Học sinh giỏi')
    elif diem > 8:
        print("Học sinh xuất sắc")


ktDiem(7.5)
