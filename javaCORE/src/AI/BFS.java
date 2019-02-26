package AI;

import java.util.LinkedList;
import java.util.Queue;

public class BFS {
    public void bfsUsingQueue(Node initial, int goal) {
        //Tự cài đặt theo slide 27 chương 3
        Queue<Node> nodes = new LinkedList<>();
        if (initial.state == goal) {
            System.out.println("Duong di là: " + initial.state);
        } else {
            nodes.add(initial);
            while (!nodes.isEmpty()) {
                Node p = nodes.poll();

                for (Node v : p.getNeighbours()) {

                    if (v.state == goal) {
                        String s = "";
                        while (v.state != initial.state) {
                            s = v.state + " " + s;
                            v = v.parent;
                        }
                        System.out.println(initial.state + " " + s);
                        return;

                    } else {
                        if (!v.visited) {
                            nodes.add(v);
                            v.visited = true;
                        }
                    }
                }

            }
        }

    }

    public static void main(String[] args) {
        Node node40 =new Node(40);
        Node node10 =new Node(10);
        Node node20 =new Node(20);
        Node node30 =new Node(30);
        Node node60 =new Node(60);
        Node node50 =new Node(50);
        Node node70 =new Node(70);

        node40.addNeighbours(node10);
        node40.addNeighbours(node20);
        node10.addNeighbours(node30);
        node20.addNeighbours(node10);
        node20.addNeighbours(node30);
        node20.addNeighbours(node60);
        node20.addNeighbours(node50);
        node30.addNeighbours(node60);
        node60.addNeighbours(node70);
        node50.addNeighbours(node70);

        BFS bfsExample = new BFS();

        System.out.println("The BFS traversal of the graph using queue ");
        bfsExample.bfsUsingQueue(node40,70);

    }

}
