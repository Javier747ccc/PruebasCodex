CXX := g++
CXXFLAGS := -Wall -O2

# Attempt to use sdl2-config to get compiler and linker flags
SDL_CFLAGS := $(shell sdl2-config --cflags 2>/dev/null)
SDL_LIBS := $(shell sdl2-config --libs 2>/dev/null)

# Fallback paths if sdl2-config isn't available
ifndef SDL_CFLAGS
SDL_CFLAGS := -IC:/SDL2/include
endif
ifndef SDL_LIBS
SDL_LIBS := -LC:/SDL2/lib -lmingw32 -lSDL2main -lSDL2
endif

TARGET := line.exe
SRC := line.cpp

all: $(TARGET)

$(TARGET): $(SRC)
	$(CXX) $(CXXFLAGS) $(SDL_CFLAGS) -o $@ $< $(SDL_LIBS)

clean:
	rm -f $(TARGET)

.PHONY: all clean
