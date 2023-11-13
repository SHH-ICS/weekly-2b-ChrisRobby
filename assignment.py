# My circle Calculator

# value of PI
PI = 3.14159

# calculate the circumference based on radius
def calcCircumference( r ):
    circ = PI * r * 2.0
    return circ

# calculate the area based on radius
def calcArea( r ):
    area = PI * r**2
    return area

def main():
    diameter = float(input("Enter the diameter of your circle:"))
    if( diameter < 0 ):
         print("Error: diameter must be positive")
         return
    
    radius = diameter / 2.0
    print("For a circle of Diameter", diameter)
    print("  Radius =", radius)
    print("  Area =", calcArea(radius))
    print("  Circumference =", calcCircumference(radius))


if __name__ == "__main__":
    main()


    